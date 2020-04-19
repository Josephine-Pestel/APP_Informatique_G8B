<!DOCTYPE html>
<html lang="fr">

<head>
    <link type="text/css" rel="stylesheet" href="../CSS_files/P_Inscription.css?t=<? echo time(); ?>" media="all">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>INIFINITE MEASURES - INSCRIPTION</title>
    <script src="../Javascript_Files/Inscription.js"></script>

</head>

<body>

<!-- Appel En-Tete et Menu avec requete php -->
<?php
require('../HTML_Files/ENTETE_MENU.php');
?>

<!-- Milieu -->
<h1 class="titre_inscription"> Inscris-toi !</h1>
<!-- Formulaire d'inscriptions-->
<section class="bloc_infos">
    <form name="formulaire_inscription" action="../../controller/inscription.php" method="post">

        <p class="prenom"> Prénom* :</p>
            <input class = "rectangle_prenom" type="text" name="prenom" value="infinitmeasures" onFocus="javascript:this.value='';"/> <br/>
        </br>

        <p class="nom"> Nom* :</p>
            <input class = "rectangle_nom" type="text" name="nom" value="INFINITMEASURES" onFocus="javascript:this.value='';"/> <br/>
        </br>

        <p class="mdp"> Mot de passe* :</p>
            <input class = "rectangle_mdp" type="password" name="mdp" value="mdp-a-rentrer" onFocus="javascript:this.value='';"/> <br/>
        </br>

        <p class="mdp2">Confirmation du mot de passe* :</p>
            <input class = "rectangle_mdp2" type="password" name="confirmation_mdp" value="mdp-a-rentrer" onFocus="javascript:this.value='';"/> <br/>
        </br>

        <p class="email"> Adresse E-mail* :</p>
            <input class = "rectangle_email" type="text" name="email" value="exemple@gmail.com" onFocus="javascript:this.value='';"/> <br/>
        </br>

        <input class="envoyer" type ="submit" value="S'inscrire" onclick="checkForm();"/>
    </form>

</section>




</body>

<!-- Appel Footer -->
<?php
require('../HTML_Files/FOOTER.php');

?>

</html>