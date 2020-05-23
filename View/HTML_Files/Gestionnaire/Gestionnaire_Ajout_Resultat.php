<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/Gestionnaire_Ajout_Resultat.css?t=<? echo time(); ?>" media="all">
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>



<?php
require('ENTETE_MENU_Gestionnaire.php');

?>
<h1>Veuillez remplir le formulaire ci-dessous pour ajouter un résultat à un utilisateur </h1>

<div class="formulaire">

<form action="../../../Model/Ajout_Resultat_versBDD.php" method="POST">
    <p><label>Identifiant de l'utilisateur : <input type ="text" name="email"/></label></p>
    <p><label>Type de test : <select name="choix">
                <option value="Temperature">Température</option>
                <option value="Frequence cardiaque">frequence cardiaque</option>
                <option value="reconnaissance de tonalité">Mesure de reconnaissance de tonalité</option>
                <option value="stimulus sonore">Temps de réaction à un stimulus sonore</option>
                <option value="stimulus visuel">Temps de réaction à un stimulus visuel</option>
            </select></label></p>
    <p><label> Score ( /100) : <input  type="number" name="score"required></label></p>
    <p><label>Date : <input type="datetime-local" name="date" max="2020-05-23" required></label></p>
    <p><input type="submit" /></p>
</form>


<a href="MonCompteGestionnaire.php">
    <button class="bouton_retour">RETOUR </button>
</a>
</div>

</body>

<?php $date = new DateTime();
echo $date->format('Y-m-d H:i:s');?>
<?php
require('FOOTER_Gestionnaire.php');

?>

</html>