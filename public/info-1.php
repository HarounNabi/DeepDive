<?php

session_start();

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

        <h1 class="text-black text-4xl font-bold mb-8">Software Expert</h1>

        <div class="space-y-6 text-gray-800 text-lg leading-relaxed">
            <p class="font-medium">
                De opleiding Software Developer aan de Bit Academy is meer dan alleen een studie; het is een plek waar je een leuke werkervaring opbouwt met klasgenoten, een expert wordt in codetalen naar keuze en uiteindelijk uitgroeit tot een volwaardig Software Developer. Bij ons draait alles om de praktijk.
            </p>
        </div>

        <div class="mt-10">
            <a href="info-2.php"
                class="animate-gradient-1 inline-flex items-center justify-center h-14 text-white font-bold px-16 rounded-2xl 
              bg-gradient-to-r from-[#e51477] via-[#e51477] via-[#89CFF0] to-[#EAC700] 
              transition-transform hover:scale-105 shadow-lg">
                Ga verder
            </a>
        </div>
    </div>
</body>

</html>