<?php

$host = 'localhost';
$databasenaam = 'quizbezoeker';
$gebruiker = 'bit_academy';
$wachtwoord = 'bit_academy';

try {
    $database = new PDO(
        "mysql:host=$host;dbname=$databasenaam;charset=utf8",
        $gebruiker,
        $wachtwoord
    );
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}
