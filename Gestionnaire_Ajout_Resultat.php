!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="Gestionnaire_Ajout_Resultat.css?t=<? echo time(); ?>" media="all">
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<?php
require('ENTETE_MENU.php');

?>
<h1>Veuillez remplir le formulaire ci-dessous pour ajouter un résultat à un utilisateur </h1>
<div class="formulaire">
<form action="Ajout_Resultat_versBDD.php" method="POST">
    <p><label>Identifiant de l'utilisateur : <input type ="text" name="identifiant_utilisateur"/></label></p>
    <p><label>Type de test : <select name="choix">
                <option value="Temperature">Temperature</option>
                <option value="Frequence_cardiaque">frequence_cardiaque</option>
                <option value="reconnaissance_tonalité">Mesure de reconnaissance de tonalite</option>
                <option value="stimulus_sonore">Temps de réaction à un stimulus sonore</option>
                <option value="stimulus_visuel">Temps de réaction à un stimulus_visuel</option>
            </select></label></p>
    <p><label> Score : <input type="int" name="score"</label></p>
    <p><label>Date : <input type="datetime-local" name="date"/></label></p>
    <p><input type="submit" /></p>
</div>
</body>
<?php
require('FOOTER.php');

?>

</html>