<?php
session_start();
include_once "views/navbar.php";
include_once "db/db.php";

$query = $database->query("SELECT * FROM KAMER_DRIE");
$vragen = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#F8F8F8] min-h-screen p-8 pt-32">
    <div class="max-w-2xl mx-auto">
        <form action="kamer4.php" method="POST">

            <?php foreach ($vragen as $vraag): ?>
                <div class="bg-white rounded-3xl shadow-xl p-8 mb-6 text-left">
                    <h2 class="font-bold text-lg text-gray-800 mb-4">
                        <?= htmlspecialchars($vraag['vraag']) ?>
                    </h2>

                    <div class="space-y-3">
                        <?php
                        $opties = [
                            'een' => $vraag['antwoord_een'],
                            'twee' => $vraag['antwoord_twee'],
                            'drie' => $vraag['antwoord_drie'],
                            'vier' => $vraag['antwoord_vier']
                        ];

                        foreach ($opties as $key => $optie):
                            if (!empty($optie)):
                        ?>
                                <label class="flex items-center p-4 border border-gray-100 rounded-xl cursor-pointer hover:bg-gray-50 transition">
                                    <input type="radio"
                                        name="vraag_<?= $vraag['id'] ?>"
                                        value="<?= htmlspecialchars($optie) ?>"
                                        class="w-4 h-4 text-[#EAC700] focus:ring-[#EAC700]">
                                    <span class="ml-3 text-gray-700"><?= htmlspecialchars($optie) ?></span>
                                </label>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>

            <button type="submit" class="w-full bg-[#EAC700] text-white font-bold py-4 rounded-3xl shadow-lg hover:bg-yellow-600 transition">
                Volgende Kamer
            </button>
        </form>
    </div>
</body>

</html>