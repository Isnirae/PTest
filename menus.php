<?php
$title = 'Nos menus';
require 'partials/header.php';

?>

<div class="container mt-2 mb-5">

    <div class="d-flex flex-column bd-highlight mb-3 justify-content-md-center">
        <h1>Nos menus pizzas sur place, à emporter ou en livraison</h1>

        <div class="p-2 bd-highlight">
            <p>
                Nous vous proposons nos menus pizzas à emporter, également accessibles en livraison depuis son restaurant pizzeria, ouvert tous les soirs de la semaine.
            </p>
        </div>

        <div class="p-2 bd-highlight">
            <p>Nous vous proposons des menus pizza au choix :
            <ul class="un">
                <li>le <b>Menu Familial</b> pour régaler toute la famille,</li>
                <li>le <b>Menu Maxi Pizza</b> pour les gourmands,</li>
                <li>le <b>Menu Petite Faim</b> pour le déjeuner ou les petites fringales.</li>
            </ul>
            </p>


        </div>
    </div>





    <div class="row row-cols-1 row-cols-md-3 g-0">

        <div class="col">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h2 class="card-title">Menu Familial</h2>
                    <ul class="list-group list-group-flush text-dark">
                        <li class="list-group-item">2 Grandes Pizzas (40cm) au choix</li>
                        <li class="list-group-item">1 Boisson sans alcool (1,5l) <b>ou</b> 1 Vin rosé (75cl)</li>
                        <li class="list-group-item">Le Petit Plaisir Sucré <b>ou</b> 4 Desserts individuels</li>
                    </ul>
                    <div class="card-footer">
                        31,90€
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-dark bg-light mb-3">
            <div class="col">
                <div class="card-body">
                    <h2 class="card-title">Menu Maxi Pizza</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">2 Moyennes Pizzas (33cm) au choix</li>
                        <li class="list-group-item">2 Boissons sans alcool (33cl)</li>
                        <li class="list-group-item">Le Petit Plaisir Sucré <b>ou</b> 2 Desserts individuels</li>
                    </ul>
                    <div class="card-footer">
                        25,90€
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-white bg-danger mb-3">
            <div class="col">
                <div class="card-body">
                    <h2 class="card-title">Menu Petite Faim</h2>
                    <ul class="list-group list-group-flush text-dark">
                        <li class="list-group-item">1 Petite Pizza (26cm) au choix</li>
                        <li class="list-group-item">1 Boisson sans alcool (33cl)</li>
                        <li class="list-group-item">1 Dessert individuel</li>
                    </ul>
                    <div class="card-footer">
                        11,90€
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-12">
        <div style="text-align: center;" class="alert alert-dismissable alert-warning">Votre pizzeria assure la livraison gratuite dans les villes <strong>Ville1</strong>, <strong>Ville2</strong> et <strong>Ville3</strong>.</div>
    </div>

</div>



<?php require 'partials/footer.php'; ?>