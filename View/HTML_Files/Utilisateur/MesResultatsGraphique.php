<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultats Graphique</title>
    <link rel="stylesheet" href="../../CSS_files/ResultatsGraphiques.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
<?php include("ENTETE_MENU_Utilisateur.php"); ?>

<div class="type_test">

    <li><a class="actif" href="MesResultatsGraphique.php"> Temps de réaction à un stimulus</a></li>
    <li><a href="GraphiquesMesuresCorporelles.php">Mesures corporelles</a></li>
    <li><a href="GraphiquesMesureTonalité.php">Mesure de reconnaissance de tonalité</a></li>

</div>

<div class="titre1">
    <p> Graphique temps de réaction stimulus sonore</p>
    <p>Graphique temps de réaction stimulus visuel</p>

</div>











<div class="graphique">

<div class="canvas1">
    <canvas id="myChart1"></canvas>
</div>

    <?php session_start();
    $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
    $req = $bdd->prepare('SELECT `idTest`, `type`, `score`, `date`, `email` FROM `tests` WHERE `email`= :email AND `type`="stimulus sonore"');
    $req->execute(array(
    'email' => $_SESSION['email']
    ));


    while ($donnees = $req->fetch()) { ?>


<script>

    var ctx = document.getElementById('myChart1').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(176,196,222)',
                borderColor: 'rgb(176,196,222)',
                data: [<?php $_POST['score'] ?>]
            }]
        },

    });
</script>

    <?php }
    $req->closeCursor();
    ?>




<div class="canvas2">
    <canvas id="myChart2"></canvas>
</div>
<script>

    var ctx = document.getElementById('myChart2').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(176,196,222)',
                borderColor: 'rgb(176,196,222)',
                data: [0, 10, 5, 2, 20, 30, 45]
            }]
        },

        // Configuration options go here
        options: {
            title:{
                text:"Résulats du temps de réaction à un stimulus sonore"
            }
        }

    });
</script>


</div>







<?php
require('FOOTER_Utilisateur.php');

?>
</body>
</html>