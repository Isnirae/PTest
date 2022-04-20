<?php
$title = 'Nos boissons';
require 'partials/header.php';

?>

<div class="container mt-2 mb-5">

    <div class="d-flex flex-column bd-highlight mb-3 justify-content-md-center">
        <h1>Nos boissons</h1>

        <div class="p-2 bd-highlight">
            <p>
                Nous vous vous propose un large choix de boissons pour déguster votre pizza. Craquez pour nos vins italiens afin d'accompagner votre repas en restant dans la tradition italienne.
                Nous vous proposons également un large choix de bières et de boissons sans alcool pour satisfaire vos papilles.
            </p>
        </div>

    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-5 mb-4">
            <div class="col">
                <img src="uploads/boissons/biere.jpg" class="card-img" alt="image biere">

            </div>

            <div class="col">
                <img src="uploads/boissons/vin.jpg" class="card-img" alt="image vin">

            </div>

            <div class="col">
                <img src="uploads/boissons/cola.jpg" class="card-img" alt="image cola">

            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-0">

        <div class="col">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h2 class="card-title">Nos bières</h2>
                    <ul class="list-group list-group-flush text-dark">
                        <li class="list-group-item d-flex justify-content-between align-items-center">Desperados 33cl <span class="badge bg-success rounded-pill">3,10€</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Heineken 25cl <span class="badge bg-success rounded-pill">2,50€</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Leffe blonde 25cl <span class="badge bg-success rounded-pill">2,80€</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Leffe ruby 25cl <span class="badge bg-success rounded-pill">3,00€</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card text-dark bg-light mb-3">
            <div class="col">
                <div class="card-body">
                    <h2 class="card-title">Nos vins</h2>
                    <ul class="list-group list-group-flush text-dark">
                        <li class="list-group-item d-flex justify-content-between align-items-center">Vin de pays <span class="badge bg-light rounded-pill text-dark">7,50€</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Vin rosé/rouge Bardolino <span class="badge bg-light rounded-pill text-dark">11,50€</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Vin rosé/rouge Lambrusco <span class="badge bg-light rounded-pill text-dark">11,50€</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Vin rouge Chianti <span class="badge bg-light rounded-pill text-dark">11,50€</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card text-white bg-danger mb-3">
            <div class="col">
                <div class="card-body">
                    <h2 class="card-title">Nos soft drink</h2>
                    <ul class="list-group list-group-flush text-dark">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Nos boissons 33cl (Coca-cola, Fante, Ice Tea, Schweppes Agrum', Oasis, Orangina, Perrier...) <span class="badge bg-danger rounded-pill">1,80€</span></li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">Nos boissons 1,5l (Coca-cola, Orangina... Selon arrivage) <span class="badge bg-danger rounded-pill">3,10€</span></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-12">
        <div style="text-align: center;" class="alert alert-dismissable alert-warning">Votre pizzeria assure la livraison gratuite dans les villes <strong>Ville1</strong>, <strong>Ville2</strong> et <strong>Ville3</strong>.</div>
    </div>

</div>








<?php require 'partials/footer.php'; ?>