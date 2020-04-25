
<?php

try {
    $bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');
} catch (Exception $e){
    die('Erreur:'.$e->getMessage());
}
//on verifie si l'utilisateur est present dans la bdd
$req = $bdd->prepare('SELECT  * FROM `utilisateurs` WHERE email = :email ');
$req->execute(array(
    'email'=>$_POST['email'],
    ));

$donnees = $req -> fetch();

    if ($donnees['email'] == $_POST['email']) {
        // On ajoute dans la table test le score et la date de l'utilisateur en fonction du test effectué

        $req = $bdd->prepare('INSERT INTO `tests`(`type`,`score`, `date`, `email`) VALUES(:type, :score, :date, :email)');
        $req->execute(array(
            'type' => $_POST['choix'],
            'score' => $_POST['score'],
            'date' => $_POST['date'],
            'email' => $_POST['email']
        ));
        header('location:P_Gestionnaire.php');

    } else {
        header('location:P_gestionnaire2.php');
    }
?>
