<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href=../View/CSS_files/P_Connexion.css?t=<? echo time(); ?>
</head>

<?php
echo ' double lol';?>


<!--/////////////////////////// selectionne les données dans la bdd///////////////////////////////////////-->
<?php
require('connexion_bdd.php');
$bdd=connexion_bdd();
$reponse = $bdd->query('SELECT * FROM `tests` ORDER by date DESC');

?>
