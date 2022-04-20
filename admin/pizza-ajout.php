<?php require 'partials/header.php'; ?>

<?php
$nom = $_POST['nom'] ?? '';
$ingredient = $_POST['ingredient'] ?? '';
$prix = $_POST['prix'] ?? '';
$errors = [];

global $db;
$pizzas = $db->query('SELECT * FROM pizzas')->fetchAll();

if (!empty($_POST)) {
    if (strlen($nom) < 2) {
        $errors['nom'] = 'Le nom de la pizza est trop court';
    }

    if (strlen($ingredient) < 15) {
        $errors['ingredient'] = "La liste d'ingredient est trop courte";
    }

    if (empty($errors)) {

        $query = $db->prepare(
            'INSERT INTO pizzas (nom, ingredient, prix)
             VALUES (:nom, :ingredient, :prix)'
        );

        $query->bindValue(':nom', $nom);
        $query->bindValue(':ingredient', $ingredient);
        $query->bindValue(':prix', $prix);


        $query->execute();

        header('Location: ./pizzas-liste.php?success');
    }
}
?>

<h1>Ajouter une pizza</h1>

<form method="POST">
    <div class="mb-3">
        <label for="title">Nom</label>
        <input type="text" name="nom" id="nom"
               class="form-control <?= isset($errors['nom']) ? 'is-invalid' : ''; ?>"
               value="<?= $nom; ?>">

        <?php if (isset($errors['nom'])) {
            echo '<span class="text-danger">'.$errors['nom'].'</span>';
        } ?>
    </div>

    <div class="mb-3">
        <label for="description">Ingredients</label>
        <textarea name="ingredient" id="ingredient"
            class="form-control <?= isset($errors['ingredient']) ? 'is-invalid' : ''; ?>"
            ><?= $ingredient;?></textarea>

        <?php if (isset($errors['ingredient'])) {
            echo '<span class="text-danger">'.$errors['ingredient'].'</span>';
        } ?>
    </div>

    <div class="mb-3">
        <label for="cover">Prix</label>
        <input type="number" placeholder="10" step="0.10" min="10" max="25" name="prix" id="prix"
               value="<?= $prix; ?>">

    </div>

    <button class="btn btn-primary">Ajouter</button>
</form>
</div>

<?php require 'partials/footer.php'; ?>