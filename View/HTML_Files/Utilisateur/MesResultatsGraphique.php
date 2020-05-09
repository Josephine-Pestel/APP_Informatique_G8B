<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../CSS_files/GraphiqueResultats.css" />
    <title>Resultats Graphique</title>
</head>

<div class="canvas">
    <canvas id="myChart"></canvas>
</div>
    <h2>Graphiques de mes résultats </h2>
    <div class="tabbed">
        <div class="tabs"><a href="#ReactS">Réaction Sonore</a><a href="#FC">Fréquence cardiaque</a><a href="#ReactV">Réaction Visuel</a><a href="#temp">température</a><a href="#tonalite">Mesure de reconnaissance de tonalité</a></div>
            <div id="ReactS" class="tab">

                    <?php
                    session_start();
                    $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
                    $req = $bdd->prepare('SELECT `idTest`, `type`, `score`, `date`, `email` FROM `tests` WHERE `email`= :email AND `type`="stimulus sonore"');
                    $req->execute(array(
                        'email' => $_SESSION['email']
                    ));

                    while ($donnees = $req->fetch()) { ?>

                        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'My First dataset',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
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
                <?php }
                $req->closeCursor();
                ?>
            </div>
        </div>


                </body>
</html>