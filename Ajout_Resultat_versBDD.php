<?php

   try {
       $ajouter_resultat= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
   } catch (Exception $e){
       die('Erreur:'.$e->getMessage());
   }
   return($ajouter_resultat);

   // On ajoute dans la table test le score et la date de l'utilisateur en fonction du test effectué

$req = $bdd->prepare('INSERT INTO tests(score, date,type) VALUES(:score , :date, ') WHERE idUtilisateur=$_POST['idUtilisateur']);
$req->execute(array(
    'score' => $score,
    'date' => $date,
));
echo 'Le resultat du test a bien été rajouté  !';

essai 2