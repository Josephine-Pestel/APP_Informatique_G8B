<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultats Graphique</title>
    <link rel="stylesheet" href="../../CSS_files/ResultatsGraphiques.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
<?php include("ENTETE_MENU_Utilisateur.php");
session_start()?>

<div class="type_test">

    <li><a  href="MesResultatsGraphique.php"> Temps de réaction à un stimulus</a></li>
    <li><a href="GraphiquesMesuresCorporelles.php">Mesures corporelles</a></li>
    <li><a class="actif" href="GraphiqueMesureTonalite.php">Mesure de reconnaissance de tonalité</a></li>

</div>

<div class="titre1">
    <p> Graphique Mesure de reconnaissance de tonalités </p>

</div>

<div class="graphique">



    <div class="tonalite">
        <?php $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', 'HpB9ADcAKZrU');

        $reqDate=$bdd->prepare('SELECT `date` FROM `tests` WHERE email = :email AND type="reconnaissance de tonalité"');
        $reqDate->execute(array(
            'email' => $_SESSION['email']));

        $reqScore=$bdd->prepare('SELECT score  FROM tests WHERE email = :email AND type="reconnaissance de tonalité" ');
        $reqScore->execute(array(
            'email' => $_SESSION['email']));


        function affiche_date($req) {
            while($donneesDate = $req ->fetch()) {
                echo "'Test du ".$donneesDate['date']."'," ;}
        }

        function affiche_score($req) {
            while($donneesTests = $req ->fetch()) {
                echo "'".$donneesTests['score']."'," ;}
        }

        ?>
        <canvas id="myChart" width="500" ></canvas>

        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: [<?php affiche_date($reqDate); ?>],
                    datasets: [
                        {
                            label: 'Score',
                            backgroundColor: 'rgba(0, 0, 0, 0.1)',
                            borderColor: 'rgba(0, 0, 0, 0.1)',
                            data: [<?php affiche_score($reqScore); ?>]
                        },
                    ]
                },

                // Configuration options go here
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>

    </div>


</div>






<?php
require('FOOTER_Utilisateur.php');

?>
</body>
</html>