<?php
$title = 'Nos pizzas';
require 'partials/header.php';

global $db;
$pizzas = $db->query('SELECT * FROM pizzas ORDER BY prix ASC')->fetchAll();
?>

<div class="container mt-2 mb-5">

    <div class="d-flex flex-column bd-highlight mb-3 justify-content-md-center">
        <h1>Pizza à emporter et en livraison</h1>
        <div class="p-2 bd-highlight">
            <p><b>Base crème fraîche</b> ou <b>sauce tomate</b>, nos pizzas sont toujours délicieuses ! À vous de faire le bon choix !</p>

            <p>Nos pizzas sont aussi disponibles en trois tailles différentes : <b>26cm</b>, <b>33cm</b> et <b>40cm</b>. Choisissez celle qui correspond à vos envies !</p>

            <p>Notre pâte à pizza est toujours faite maison avec des ingrédients de qualité et notre savoir-faire.</p>

            <p>Profitez également de nos <b>trois menus pizzas</b> pour vous régaler seul ou en famille !</p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-0">

        <div class="col">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <img src="uploads/pizzas/1.jpg" class="card-img" alt="...">
                </div>
            </div>
        </div>

        <div class="card text-dark bg-light mb-3">
            <div class="col">
                <div class="card-body">
                    <img src="uploads/pizzas/2.jpg" class="card-img" alt="...">
                </div>
            </div>
        </div>

        <div class="card text-white bg-danger mb-3">
            <div class="col">
                <div class="card-body">
                    <img src="uploads/pizzas/3.jpg" class="card-img" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
              <div class="col-10" style="padding-left:5%;"> <h3>Nos Pizzas</h3></div>
              <div class="col-2" style="text-align:center;"> <h5>26cm / 33cm / 40cm</h5></div>
              <hr />
    </div>
    <div class="row row-cols-md-1 g-0">
        <?php foreach ($pizzas as $pizza) { 
            $var26 = -1.70;
            $var40 =  3.50;
            ?>
            <div class="col">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h3 class="card-title"><?= $pizza['nom']; ?></h3>

                        <div class="card-text">
                            <?= $pizza['ingredient']; ?>
                        </div>

                        <div class="card-text text-end">
                           <b><?= number_format($pizza['prix']+$var26, 2, ',', ' '); ?>€</b> 
                           / <b><?= number_format($pizza['prix'], 2, ',', ' '); ?>€</b> 
                           / <b><?= number_format($pizza['prix']+$var40, 2, ',', ' '); ?>€</b>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
<div class="col-sm-12">
    <div style="text-align: center;" class="alert alert-dismissable alert-warning">Votre pizzeria assure la livraison gratuite dans les villes <strong>Ville1</strong>, <strong>Ville2</strong> et <strong>Ville3</strong>.</div>
</div>



<?php require 'partials/footer.php'; ?>