<?php

// On inclut la database
require '../config/database.php';

// On récupère l'id
$id = $_GET['id'] ?? 0;

// On fait la suppression
global $db;
$query = $db->prepare(
    'DELETE FROM pizzas WHERE id = :id'
);
$query->bindValue(':id', $id);
$query->execute();

// On redirige vers la liste
header('Location: pizzas-liste.php?delete');

