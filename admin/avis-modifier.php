<?php require 'partials/header.php';

// Ici, on récupère l'avis qu'on va modifier dans la BDD
$id = $_GET['id'] ?? 0;

global $db;
$query = $db->prepare('SELECT * FROM avis WHERE id = :id');
$query->bindValue(':id', $id);
$query->execute();
$avi = $query->fetch();

// Si l'avis n'existe pas, on renvoie une 404
if (!$avi) {
    require 'partials/404.php';
}

$publie = $_POST['publie'] ?? $avi['publie'];
$errors = [];

if (!empty($_POST)) {
    // On vérifie que la valeur de l'avis ne soit pas vide.
    if (empty($publie)) {
        $errors['publie'] == 'Cet avis contient la mauvaise valeur.';
    }

    // Après avoir vérifié les erreurs, s'il n'y en a pas, on modifie la catégorie dans la BDD
    if (empty($errors)) {

        $query = $db->prepare('UPDATE avis SET publie = :publie WHERE id = :id');
        $query->bindValue(':publie', $publie);
        $query->bindValue(':id', $id);
        $query->execute();

        // On fait une redirection après avoir inséré l'avis'
        header('Location: avis-liste.php?success');
    }
} // Fin du if pour vérifier la soumission du formulaire

?>

<h1>Publié ou non l'avis de <?= $avi['pseudo']; ?></h1>
<form method="POST">
    <div class="form-group">
        <label for="name">Doit ont publié cette avis : "<?= $avi['comment']; ?>"</label>
        <div>
            <input type="radio" id="1" class=" <?= isset($errors['publie']) ? 'is-invalid' : ''; ?>" name="publie" value="1" checked>
            <label for="1">Publier !</label>
        </div>

        <div>
            <input type="radio" id="0" class=" <?= isset($errors['publie']) ? 'is-invalid' : ''; ?>" name="publie" value="0">
            <label for="0">Ne pas publier !</label>
        </div>
        <?php if (isset($errors['publie'])) { // S'il y a un erreur sur le champ
            echo '<span class="text-danger">' . $errors['publie'] . '</span>';
        } ?>
    </div>
    <button class="btn btn-primary">Confirmer</button>
</form>

<?php require 'partials/footer.php'; ?>