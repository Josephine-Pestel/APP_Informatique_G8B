<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../../CSS_files/EditerProfilGestionnaire.css?t=<? echo time(); ?>" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>INIFINITE MEASURES - CONNEXION</title>
</head>

<body>

<?php
session_start();
include('ENTETE_MENU_Gestionnaire.php');

?>
<p class="recap"> Voici vos données actuelles: </p>
<?php echo '-' . $_SESSION['nom']?> </br>
<?php echo '-'. $_SESSION['email']?></br>
<?php echo '-'. $_SESSION['num_tel']?></br>
<?php echo '-'. $_SESSION['domaine']?></br>
<!-- Milieu -->

<h1 class="titre_connexion"> Editer son profil </h1>


<p class="titre"> Changez les données que vous souhaitez en remplissant le formulaire ci-dessous ! </p>

<section class="bloc_infos">
    <form name="formulaire_inscription" action="EditerProfilGestionnaireController.php" method="post">

        <p class="nom"> Modifier son nom :</p>
        <input class = "rectangle_nom" type="text" name="nom"/> <br/>
        </br>

        <p class="email"> Modifier son email :</p>
        <input class = "rectangle_email" type="text" name="email"/> <br/>
        </br>

        <p class="MotdePasse"> Modifier son mot de passe:</p>
        <input type="text" name="MotdePasse"></label>
        </br>


        <p class="NumeroTel"> Modifier son numéro de tel :</p>
        <input type="text" name="NumeroTel"></label>
        </br>

        <p class="Domaine"> Modifier son domaine :</p>
        <input type="text" name="Domaine"></label>
        </br>


        <input class="envoyer" type ="submit" value="Enregistrer" onclick="checkForm();"/>
    </form>

</section>




</body>

<!-- Appel Footer -->
<?php
require('../FOOTER.php');

?>

</html>

