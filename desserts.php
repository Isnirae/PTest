<?php
$title = 'Nos desserts';
require 'partials/header.php';

?>

<div class="container mt-2 mb-5">
    <h1>Nos desserts en livraison et à emporter</h1>
    <div class="p-2 bd-highlight">
        <p>Livraison de pizza à <b>Ville 1</b>, Nous vous proposons également des desserts pour finir votre repas avec une petite touche sucrée.</p>

        <p>Notre pizzeria vous propose des petites douceurs pour finir le repas comme il se doit.</p>

        <p>Craquez pour notre <b>tiramisu maison</b>, notre <b>pizza sucrée</b> ou notre sélection de <b>glaces</b>, de quoi satisfaire toutes vos envies !</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-0">
        <div class="col">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <img src="uploads/desserts/pizz-sucre.jpg" class="card-img" alt="...">
                </div>
            </div>
        </div>

        <div class="card text-dark bg-light mb-3">
            <div class="col">
                <div class="card-body">
                    <img src="uploads/desserts/glace.jpg" class="card-img" alt="...">
                </div>
            </div>
        </div>

        <div class="card text-white bg-danger mb-3">
            <div class="col">
                <div class="card-body">
                    <img src="uploads/desserts/tiramisu.jpg" class="card-img" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div>
        <div>
            <h3 style="text-align: center;" class="panel-title">Nos desserts</h3>
        </div>
        <div class="container ml-5 mr-5">
            <table class="table">
                <tbody>
                    <tr>
                        <td><strong>Pizza sucrée</strong>
                            <div>Crème fraîche ou Nutella, fruits au choix (Ananas ou Pêches ou
                                Poires), ou bonbons au choix (Bananes ou Fraises ou Smarties),
                                Chocolat fondant (uniquement sur une base crème fraîche)</div>
                        </td>
                        <td style="text-align: center;">8,50€</td>
                    </tr>
                    <tr>
                        <td><strong>Tiramisu</strong></td>
                        <td style="text-align: center;">2,50€</td>
                    </tr>
                    <tr>
                        <td><strong>Nos glaces </strong>
                            <div>Cônes, Vanille/Pistache/Chocolat (au choix), Mega Chocolat
                                Blanc/Amandes (au choix), Crunch, Lion,Pirulo tropical,
                                Smarties, Sorbet Coca-Cola</div>
                        </td>
                        <td style="text-align: center;">2,00€</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
















</div>



    <div class="col-sm-12">
        <div style="text-align: center;" class="alert alert-dismissable alert-warning">Votre pizzeria assure la livraison gratuite dans les villes <strong>Ville1</strong>, <strong>Ville2</strong> et <strong>Ville3</strong>.</div>
    </div>

<?php require 'partials/footer.php'; ?>