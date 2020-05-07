<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/P_ResultatTableau.css?t=<? echo time(); ?>" media="all">
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>


<?php
require('ENTETE_MENU_Utilisateur.php');

?>


<?php
session_start();
$bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
    $req = $bdd->prepare('SELECT `type`, `score`, `date` FROM `tests` WHERE email=:email');
    $req->execute(array(
        'email' => $_SESSION['email']));
?>

<h1 class="titre_tableau"> TABLEAU DE RESULTATS </h1>


<div class="fond"> </div>
<table class="resultat_tableau">
    <tr>
        <th> Test effectué  </th>
        <th> Date </th>
        <th> Score / 100</th>
    </tr>

    <?php while ($donnees = $req->fetch()) { ?>
    <tr>
        <th><p class="Type"><?php echo $donnees['type'] ?></p></th>
        <th><p class="Date"><?php echo $donnees['date'] ?></p></th>
        <th><p class="Score"><?php echo $donnees['score'] ?></p></th>
    </tr>

    <?php
            }
            $req->closeCursor();
?>

</table>

<a href="MonCompteUtilisateur.php">
    <button class="bouton_retour"> RETOUR</button>
</a>


</body>

<?php
require('../FOOTER.php');

?>

</html>