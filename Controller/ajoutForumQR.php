<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> blog com post</title>
</head>

<body>

<?php

require('../Model/connexion_bdd.php');

$bdd=connexion_bdd();

$req=$bdd->prepare('INSERT INTO forum_qr(idDiscussion, auteur, post, date_post) 
VALUES(:numDiscussion, :auteur, :post, CURDATE())');
$req->execute(array(
    'numDiscussion'=>$_POST['numDiscussion'],
    'auteur'=>$_POST['auteur'],
    'post'=>$_POST['post']));


header("Refresh:0; url=../View/HTML_Files/Administrateur/forumQR.php? num_de_la_discussion=".$_POST['numDiscussion'] );
?>


</body>
</html>