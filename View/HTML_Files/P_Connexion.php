<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../CSS_files/P_Connexion.css?t=<? echo time(); ?>" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>INIFINITE MEASURES - CONNEXION</title>
</head>

<body>

<!-- Appel En-Tete et Menu avec requete php -->

<?php
require('../HTML_Files/ENTETE_MENU.php');

?>

<!-- Milieu -->

<h1 class="titre_connexion"> Connecte-toi !</h1>
<!-- Formulaire d'inscriptions-->
<section class="bloc_infos">
    <form action="http://localhost/Entrainement_Perso_php/espaceMembre/controller/connexion.php" method="post">

        <p class="email"> Adresse E-mail*</p>
            <input class = "rectangle_email" type="text" name="email" value="exemple@gmail.com" onFocus="javascript:this.value='';"/> <br/>
       </br>

        <p class="mdp"> Mot de passe*</p>
            <input class = "rectangle_mdp" type="password" name="mdp" value="mdp-a-rentrer" onFocus="javascript:this.value='';"/> <br/>
        <a href="#" >
            <p class="oublie" > Mot de passe oublié ? </p>
        </a>

        </br></br>
        <input class="envoyer" type ="submit" value="Envoyer" />

        <p>
        <button class="nouvel_utilisateur">
            <a class="text" href="../HTML_Files/P_Inscription.php">Nouvel utilisateur ? INSCRIS-TOI ! </a>
        </button></p>
    </form>

</section>




</body>

<!-- Appel Footer -->
<?php
require('../HTML_Files/FOOTER.php');

?>

</html>

