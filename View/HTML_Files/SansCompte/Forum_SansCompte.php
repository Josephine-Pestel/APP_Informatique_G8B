
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="../../CSS_files/forum_sansCompte.css?t=<? echo time(); ?>" media="all">
    <title>WINK FOR INIFINITE MEASURES</title>
</head>


<body>
<!-- header et menu -->
<?php include("ENTETE_MENU_SansCompte.php"); ?>


<!--  ---------------------- FORUM ---------------------------------------   -->
<div class="page_forum">

    <h1 class="titre_forum"> FORUM </h1>
    </br>
    <div id="description_forum">
        <p class="text_forum">Vous souhaitez accéder au forum mais vous n'avez pas de compte ?</p>
        <p class="text_forum">Alors inscrivez-vous au plus vite pour y accéder et discuter !</p>
    </div>

    <a href="P_Inscription.php">
        <button class="button_back"> S'inscrire </button>
    </a>
</div>

<footer>
    <?php
    require('FOOTER_SansCompte.php');

    ?>
</footer>


</body>
</html>
