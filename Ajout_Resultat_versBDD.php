
<?php

   try {
       $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
   } catch (Exception $e){
       die('Erreur:'.$e->getMessage());
   }

   // On ajoute dans la table test le score et la date de l'utilisateur en fonction du test effectué

$req = $bdd->prepare('INSERT INTO `tests`(`score`, `date`, `idUtilisateur`) VALUES(:score, :date, :idUtilisateur)');
$req->execute(array(
    'score' => $_POST['score'],
    'date' => $_POST['date'],
    'idUtilisateur' => $_POST['identifiant_utilisateur']
    ));

if (isset($_POST['score'])) {
    echo 'Le score a bien été ajouté';
} else {
    echo 'Dommage';
}

?>
