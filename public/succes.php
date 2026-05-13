<?php
session_start();

include_once "views/navbar.php";
include_once "db/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['current_table'])) {
    $vorige_tabel = $_POST['current_table'];
    $kamer_nr = $_POST['kamer_nummer'];

    $stmt = $database->prepare("SELECT id, juist FROM $vorige_tabel");
    $stmt->execute();
    $correcte_antwoorden = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

    $score = 0;
    foreach ($correcte_antwoorden as $id => $juiste_waarde) {
        $input_naam = "vraag_" . $id;
        if (isset($_POST[$input_naam]) && $_POST[$input_naam] === $juiste_waarde) {
            $score++;
        }
    }
    $_SESSION["score_$kamer_nr"] = $score;
}

$score1 = $_SESSION['score_1'] ?? 0;
$score2 = $_SESSION['score_2'] ?? 0;
$score3 = $_SESSION['score_3'] ?? 0;
$score4 = $_SESSION['score_4'] ?? 0;

$totaal_score = $score1 + $score2 + $score3 + $score4;
$max_score = 20;

include_once "views/navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultaat</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#F8F8F8] min-h-screen p-8 pt-32">
    <div class="max-w-2xl mx-auto text-center">
        <div class="bg-white rounded-3xl shadow-xl p-12">
            <h1 class="text-4xl font-black text-gray-800 mb-4">Gefeliciteerd Wander! 🏆</h1>
            <p class="text-gray-600 mb-8 text-lg">Jij en Team B hebben alle kamers doorlopen. Hier zijn jullie resultaten:</p>

            <div class="grid grid-cols-2 gap-4 mb-8">
                <div class="p-4 bg-gray-50 rounded-2xl">
                    <span class="block text-sm text-gray-500 uppercase font-bold">Kamer 1</span>
                    <span class="text-2xl font-bold text-[#EAC700]"><?= $score1 ?>/5</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-2xl">
                    <span class="block text-sm text-gray-500 uppercase font-bold">Kamer 2</span>
                    <span class="text-2xl font-bold text-[#EAC700]"><?= $score2 ?>/5</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-2xl">
                    <span class="block text-sm text-gray-500 uppercase font-bold">Kamer 3</span>
                    <span class="text-2xl font-bold text-[#EAC700]"><?= $score3 ?>/5</span>
                </div>
                <div class="p-4 bg-gray-50 rounded-2xl">
                    <span class="block text-sm text-gray-500 uppercase font-bold">Kamer 4</span>
                    <span class="text-2xl font-bold text-[#EAC700]"><?= $score4 ?>/5</span>
                </div>
            </div>

            <div class="border-t border-gray-100 pt-8">
                <h2 class="text-xl text-gray-500 mb-2">Totale Score</h2>
                <div class="text-6xl font-black text-gray-800">
                    <?= $totaal_score ?> <span class="text-2xl text-gray-400">/ <?= $max_score ?></span>
                </div>
            </div>

            <a href="index.php" class="inline-block mt-10 px-8 py-4 bg-[#EAC700] text-white font-bold rounded-3xl shadow-lg hover:bg-yellow-600 transition">
                Terug naar Registratie
            </a>

            <?php
            session_destroy();
            ?>
        </div>
    </div>
</body>

</html>