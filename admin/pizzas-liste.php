<?php require 'partials/header.php';

global $db;
$pizzas = $db->query('SELECT * FROM pizzas')->fetchAll();
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Ingredient</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pizzas as $pizza) { ?>
            <tr>
                <td><?= $pizza['nom']; ?></td>
                <td><?= $pizza['ingredient']; ?></td>
                <td><?= number_format($pizza['prix'], 2, ',', ' '); ?>€</td>
                <td>
                <a href="./pizza-supprimer.php?id=<?= $pizza['id']; ?>"
                       class="btn btn-danger"
                       onclick="return confirm('Voulez-vous supprimer cette pizza <?= $pizza['nom']; ?> ?');">
                        Supprimer
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php require 'partials/footer.php'; ?>