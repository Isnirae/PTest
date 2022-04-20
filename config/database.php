<?php

/**
 * Ici, on fait la connexion avec la base de données.
 */

// $db est un objet PDO = PHP Data Objects
$db = new PDO('mysql:host=localhost;dbname=dbpizz;charset=UTF8', 'root', '', [
    // Activer les erreurs SQL
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // On récupère les résultats au format tableau associatif
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);




