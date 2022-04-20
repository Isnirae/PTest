<?php
$title = 'Connexion';
ob_start();
// session_start();
require 'partials/header.php';

$name = $_POST['name'] ?? '';
$mdp = $_POST['mdp'] ?? '';
$errors = [];

if (!empty($_POST)) {
    /** @var PDO $db */
    $query = $db->prepare(
        'SELECT * FROM admin WHERE name = :name'
    );
    $query->bindValue(':name', $name);
    $query->execute();
    $admin = $query->fetch(); // On récupère le user qui veut se connecter

    // On va vérifier que l'utilisateur existe et que le mot de passe saisi
    // correspond au hash de la BDD
    if ($admin && password_verify($mdp, $admin['mdp'])) {
        // On est connecté
        $_SESSION['admin'] = $admin;
        header('Location: ./admin');
    } else {
        echo 'Email ou mot de passe incorrect';
    }
}

// Afficher un message "Bienvenue USER"
// var_dump($_SESSION);

?>

<div class="container">
    <h1>Connexion</h1>

    <form method="post">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div>
            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" class="form-control">
        </div>

        <button class="btn btn-primary">Connexion</button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>