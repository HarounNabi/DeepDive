<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['voornaam'] = $_POST['voornaam'];
    $_SESSION['teamnaam'] = $_POST['teamnaam'];
}

include_once "db/db.php";
include_once "views/navbar.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bit Bezoeker</title>
    <link rel="stylesheet" href="style.css?v=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-[#F8F8F8] min-h-screen flex flex-col items-center p-32">
    <div class="bg-white mt-25 rounded-[40px] shadow-2xl p-12 w-full max-w-2xl text-center">

        <h1 class="text-black text-4xl font-bold mb-8">Rollen</h1>

        <div class="space-y-6 text-gray-800 text-lg leading-relaxed">
            <p class="font-medium">
                Tijdens de opleiding leer je alles over het bouwen van software en apps (applicaties met een doel voor elk apparaat). Je maakt kennis met verschillende rollen:
            </p>
            <p>
                Frontend Developer: Bouwt de voorkant van een website (wat de gebruiker ziet). Dit is het design en de interface. JavaScript. (FIX DIT)
            </p>
            <p>
                Backend Developer: Bouwt de achterkant van de website (wat je niet ziet). Hier zit de logica en de database-koppeling.

                Je gaat aan de slag met de meest gebruikte talen onder developers zoals PHP, en leert grappen maken over talen waar je "scherp" mee ziet, zoals C# (C-Sharp).
            </p>
        </div>

        <div class="mt-10">
            <a href="kamer.php"
                class="animate-gradient-4 inline-flex items-center justify-center h-14 text-white font-bold px-16 rounded-2xl 
              bg-gradient-to-r from-[#e51477] via-[#e51477] via-[#89CFF0] to-[#EAC700] 
              transition-transform hover:scale-105 shadow-lg">
                Ga verder
            </a>
        </div>
    </div>
</body>

</html>