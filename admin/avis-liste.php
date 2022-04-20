<?php require 'partials/header.php';

global $db;
$avis = $db->query('SELECT * FROM avis')->fetchAll();
?>

<?php if (isset($_GET['delete'])) { ?>
    <div class="alert alert-success">
        L'avis a bien été supprimée.
    </div>
<?php } ?>

<?php if (isset($_GET['success'])) { ?>
    <div class="alert alert-success">
        L'avis a bien été modifiée dans la BDD.
    </div>
<?php } ?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Pseudo</th>
            <th>Commentaire</th>
            <th>Avis publié ?</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($avis as $avi) { ?>

            <tr>
                <td><?= $avi['id']; ?></td>
                <td><?= $avi['pseudo']; ?></td>
                <td><?= $avi['comment']; ?></td>
                <td><?php 
                if( $avi['publie']==1) {
                    echo "Publié";
                } else {
                    echo "Non Publié";
                };  ?></td>
                <td>
                    <a href="./avis-modifier.php?id=<?= $avi['id']; ?>"
                       class="btn btn-secondary">
                        Publier ?
                    </a>
                    <a href="./avis-supprimer.php?id=<?= $avi['id']; ?>"
                       class="btn btn-danger"
                       onclick="return confirm('Voulez-vous supprimer cet avis ?');">
                        Supprimer
                    </a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>

<?php require 'partials/footer.php'; ?>