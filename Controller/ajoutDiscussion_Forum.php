<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<?php
require('../Model/ajoutDiscussion_Forum.php');


ajoutdiscussionBDD();
echo 'Discussion ajoutée à la bdd';?>

<a href="../View/HTML_Files/Administrateur/gererUtilisateur.php">
    <button class="retour">RETOUR </button>
</a>

