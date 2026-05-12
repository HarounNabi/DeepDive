<?php

include_once "views/navbar.php";
include_once "db/db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bit Academy</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body

    class="bg-[#F8F8F8] h-screen overflow-hidden flex flex-col items-center">
    <div class="flex flex-col items-center text-center max-w-2xl">
        <p class="text-[#EAC700] mt-5 text-sm font-bold uppercase tracking-wide">Bit Academy • Noorderpoort</p>

        <h1 class="text-[#868686] text-6xl font-extrabold tracking-tight mt-2 leading-none">ESCAPE</h1>
        <h1 class="text-[#EAC700] text-6xl font-extrabold tracking-tight leading-none">THE CODE</h1>

        <p class="text-gray-700 text-sm mt-2 leading-relaxed max-w-md">
            Ontdek wat de opleiding Software Developer inhoudt. Los 4 puzzels op, verzamel de eindcode en registreer jouw tijd op de highscore lijst.
        </p>

        <div class="bg-white rounded-3xl shadow-xl p-10 mt-8 w-full max-w-md text-left">
            <h2 class="text-[#868686] text-3xl font-semibold mb-8">Registratie</h2>

            <form action="quizbeschrijving.php" method="POST" class="space-y-6">
                <div>
                    <label class="block text-gray-500 text-lg mb-2">Voornaam</label>
                    <input name="voornaam" type="text" placeholder="Bijv. Dylan."
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-[#EAC700] placeholder-gray-300">
                </div>

                <div>
                    <label class="block text-gray-500 text-lg mb-2">Teamnaam</label>
                    <input name="teamnaam" type="text" placeholder="Bijv. Team A"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-[#EAC700] placeholder-gray-300">
                </div>

                <button type="submit"
                    class="w-full bg-[#EAC700] hover:bg-[#d4b500] text-white font-bold py-4 rounded-xl transition duration-200 mt-4 shadow-sm">
                    Volgende stap
                </button>
            </form>
        </div>
    </div>

</body>

</html>