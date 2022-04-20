<?php

session_start();

// On déconnecte l'utilisateur
unset($_SESSION['admin']);

header('Location: ../index.php');