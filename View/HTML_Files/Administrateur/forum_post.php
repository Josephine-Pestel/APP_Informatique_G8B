<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> blog com post</title>
</head>

<body>

<?php

require('../../../Model/connexion_bdd.php');
connexion_bdd();

//requete pour récupérer et enregistrer dans la bdd les commentaires et pseudo envoyés par les utilisateurs
//préparation d'une requete qui permet d'insérer une ligne dans la bdd avec le pseudo du vsiteur et son commentaire avec la date

$req=$bdd->prepare('INSERT INTO forum_qr(auteur,post) 
VALUES(:nom_auteur, :com, :date_du_com, :num_billet)');
$req->execute(array(
    'nom_auteur'=>$_POST['auteur'],
    'com'=>$_POST['commentaire'],
    'date_du_com'=>$_POST['date_commentaire'],
    'num_billet'=>$_POST['id_billet'],
));





//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

<!-- Titre principal de la page -->
<h1>Mon super blog !</h1>
<!-- Lien pour faire retour -->
<a href="blog_index.php"> Retour à la liste des billets</a>
<p>Mets un commentaires si tu le souhaites !</p>



<!-- PARTIE 1 : Formulaire pour écrire un commentaire -->
<form action="blog_commentaire_post.php" method="post">
    <p> Pseudo :
        <input type="text" name="auteur" /> <br/>
    </p></br>

    <p> Date du commentaire :
        <input type="text" name="date_commentaire" /> <br/>
    </p></br>

    <p> Numéro du billet :
        <input type="text" name="id_billet" /> <br/>
    </p></br>

    <textarea name="commentaire" rows="5" cols="45">Rentres ton commentaire dans cette case !</textarea>

    <input type ="submit" name="envoyer" </input>
</form>

<p>--------------------------------------------------------------------------------------------------------------------</p>



<!-- PARTIE 2 : -->
<!--Récupération du billet -->
<p>BILLET :</p></br>



<?php
//Récupération du contenu du billet grâce à une requête en fonction de paramètres
$req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \' le %d/%m/%Y à %Hh%imin%ss\') 
AS date_creation_format 
FROM billets 
WHERE id=:NumBillet_TableBillet');
//On execute la requete faite sur le billet. On exécute le fait de récupérer le billet
$req->execute(array(
    'NumBillet_TableBillet' => $_POST['id_billet']));
//Préparation à l'affichage du billet grâce à la fonction fetch()
$donnees = $req->fetch();
?>

<!-- Affichage du billet -->
<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre'])?>
        <em><?php echo $donnees['date_creation_format']?></em>
    </h3>
    <p>
        <?php echo htmlspecialchars($donnees['contenu'])?><br/>
    </p>

</div>
</br>

<!-- On arrête la requête -->
<?php $req->closeCursor(); ?>



<!-- PARTIE 3 : -->
<!-- Affichage de tous les commentaires  : ceux rentrés par l'utilisateurs et ceux déjà présent -->
<p>--------------------------------------------------------------------------------------------------------------------</p>
<p>
    <em> Et maintenant voici tous les commentaires liés au billet sélectionné !</em>
</p></br>

<?php
//préparation de la requete : récupérer seulement les commentaires qui sont liés au billet
$req = $bdd->prepare('SELECT id,auteur,commentaire, date_commentaire 
FROM commentaires 
WHERE id_billet=:num_billet
ORDER BY date_commentaire DESC');
//On execute la requete
$req->execute(array(
    'num_billet'=>$_POST['id_billet']));

//On fait une boucle pour tout afficher
while($donnees = $req->fetch()){
    ?>
    <p>
        <?php echo htmlspecialchars($donnees['auteur']) ?>;
        <?php echo htmlspecialchars($donnees['date_commentaire']) ?>;</br>
        <?php echo htmlspecialchars($donnees['commentaire'])?>;
    </p>
    <?php
}


//On arrête la requête
$req->closeCursor();


?>

</body>
</html>