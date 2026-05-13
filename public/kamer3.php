<?php
session_start();
include_once "db/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['current_table'])) {
    $vorige_tabel = $_POST['current_table'];
    $kamer_nr = $_POST['kamer_nummer'];

    $stmt = $database->prepare("SELECT id, juist FROM $vorige_tabel");
    $stmt->execute();
    $correcte_antwoorden = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

    $score = 0;
    foreach ($correcte_antwoorden as $id => $juiste_waarde) {
        if (isset($_POST["vraag_$id"]) && $_POST["vraag_$id"] === $juiste_waarde) {
            $score++;
        }
    }
    $_SESSION["score_$kamer_nr"] = $score;
}

$query = $database->query("SELECT * FROM KAMER_DRIE");
$vragen = $query->fetchAll(PDO::FETCH_ASSOC);

include_once "views/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ervaring</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#F8F8F8] min-h-screen p-8 pt-32">
    <div class="max-w-2xl mx-auto">
        <form action="kamer4.php" method="POST">
            <input type="hidden" name="current_table" value="KAMER_DRIE">
            <input type="hidden" name="kamer_nummer" value="3">

            <?php foreach ($vragen as $vraag): ?>
                <div class="bg-white rounded-3xl shadow-xl p-8 mb-6">
                    <h2 class="font-bold text-lg text-gray-800 mb-4"><?= htmlspecialchars($vraag['vraag']) ?></h2>
                    <div class="space-y-3">
                        <?php foreach (['antwoord_een', 'antwoord_twee', 'antwoord_drie', 'antwoord_vier'] as $col):
                            if (!empty($vraag[$col])): ?>
                                <label class="flex items-center p-4 border border-gray-100 rounded-xl cursor-pointer hover:bg-gray-50 transition">
                                    <input type="radio" name="vraag_<?= $vraag['id'] ?>" value="<?= htmlspecialchars($vraag[$col]) ?>" required class="w-4 h-4 text-[#EAC700]">
                                    <span class="ml-3 text-gray-700"><?= htmlspecialchars($vraag[$col]) ?></span>
                                </label>
                        <?php endif;
                        endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <button type="submit" class="w-full bg-[#EAC700] text-white font-bold py-4 rounded-3xl shadow-lg hover:bg-yellow-600 transition">Volgende Kamer</button>
        </form>
    </div>
</body>

</html>