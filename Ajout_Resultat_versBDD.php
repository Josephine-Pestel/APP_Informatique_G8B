
<?php

try {
    $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
} catch (Exception $e){
    die('Erreur:'.$e->getMessage());
}

// On ajoute dans la table test le score et la date de l'utilisateur en fonction du test effectué

$req = $bdd->prepare('INSERT INTO `tests`(`type`,`score`, `date`, `idUtilisateur`) VALUES(:type, :score, :date, :idUtilisateur)');
$req->execute(array(
    'type' => $_POST['choix'],
    'score' => $_POST['score'],
    'date' => $_POST['date'],
    'idUtilisateur' => $_POST['identifiant_utilisateur']
));
header('location:P_Gestionnaire.php');
?>
