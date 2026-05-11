<?php

include_once "views/navbar.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bit Bezoeker</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#F8F8F8] min-h-screen flex flex-col items-center">
    <div class="bg-white mt-25 rounded-[40px] shadow-2xl p-12 w-full max-w-2xl text-center">

        <h1 class="text-black text-4xl font-bold mb-8">Quiz Beschrijving</h1>

        <div class="space-y-6 text-gray-800 text-lg leading-relaxed">
            <p class="font-medium">
                Informatie: Wat leuk dat je interesse hebt in de opleiding Software Developer bij de Bit Academy!
            </p>

            <p>
                Je leert vooral door te doen: projecten bouwen, samenwerken en werken met programmeertalen zoals JavaScript.
                Je hebt geen ervaring nodig, wel motivatie en een goede laptop. De opleiding duurt gemiddeld 3 jaar (MBO niveau 4) en bevat ook stage.
            </p>
        </div>
        <div class="mt-10">
            <a href="info-4.php" class="bg-[#EAC700] hover:bg-[#d4b500] text-white font-bold py-5 px-16 rounded-2xl text-xl transition-all shadow-md">Ga verder</a>
        </div>
    </div>
</body>

</html>