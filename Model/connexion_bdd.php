<?php
function connexion_bdd(){
    try {
        $connexion_bdd = new PDO('mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', 'HpB9ADcAKZrU');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return($connexion_bdd);
}