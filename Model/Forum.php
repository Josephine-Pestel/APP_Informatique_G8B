<?php
require('connexion_bdd.php');

function recupDiscussionForum(){
    $bdd=connexion_bdd();
    $req = $bdd->query('SELECT idDiscussion, theme, date_discussion, originaire FROM forum');
    return($req);
}
