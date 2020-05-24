
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

$datejour = date('d/m/Y');
$datefin= $_POST['date'];
$dfin = explode("/", $datefin);
$djour = explode("/", $datejour);
$finab = $dfin[2].$dfin[1].$dfin[0];
$auj = $djour[2].$djour[1].$djour[0];

if ($auj< $finab)
    {
    header('location:../View/HTML_Files/Gestionnaire/Gestionnaire_Ajout_Resultat3.php');
    }

    elseif($donnees['email'] == $_POST['email'])  {
        // On ajoute dans la table test le score et la date de l'utilisateur en fonction du test effectué

        $req = $bdd->prepare('INSERT INTO `tests`(`type`,`score`, `date`, `email`) VALUES(:type, :score, :date, :email)');
        $req->execute(array(
            'type' => $_POST['choix'],
            'score' => $_POST['score'],
            'date' => $_POST['date'],
            'email' => $_POST['email']
        ));
        header('location:../View/HTML_Files/Gestionnaire/P_Gestionnaire.php');

    } else {
        header('location:../View/HTML_Files/Gestionnaire/Gestionnaire_Ajout_Resultat2.php');
    }


?>