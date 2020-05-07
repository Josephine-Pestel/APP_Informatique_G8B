<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/gererUtilisateur.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<!-- Appel En-Tete et Menu par requete php avec require-->

<?php
session_start();
require('ENTETE_MENU_Admin.php');

?>

<!-- Milieu -->
<h1 class="titre_gerer"> Gérer les utilisateurs </h1>
<div class="fond"> </div>
<img class="photo_profil" src="../../../images/iconAdmin.png" alt="photo de profil"/>
</br></br>
<section class="deux_parties">
    <section class="partie_gauche">

        <form name="choix_admin" action="../../../Controller/gererUtilisateur_Admin" method="POST">
                <label class="texte_choix"> Que voulez-vous faire ? :</label>
                <select class="liste_choix" name="choix">
                    <option value="editer">Editer le profil d'un utilisateur</option>
                    <option value="rechercher">Rechercher un utilisateur</option>
                    <option value="ajouter">Ajouter un utilisateur</option>
                    <option value="supprimer">Supprimer un utilisateur</option>
                    <option value="bannir">Bannir un utilisateur</option>
                </select>
            <input class="boutons_valider" type ="submit" value="Valider" onclick="checkForm();"/>
        </form>
    </section>

    <section class="partie_droite">
        <section class="details1">
            <p class="nom"> <?php echo $_SESSION['nom'];?></p>
            <p> Compte administrateur </p>
        </section>


        <div class="separation1"></div>

        <section class="details2">

            <p class="email"> E-mail : <?php echo $_SESSION['email'];?></p>

        </section>

        <div class="separation1"></div>
    </section>

</section>



</body>

<!-- Appel Footer -->
<?php
require('../FOOTER.php');

?>

</html>
<?php
