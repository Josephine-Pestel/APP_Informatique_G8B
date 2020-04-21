
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/P_FAQ.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>
<title>FAQ</title>

<?php
require('ENTETE_MENU_Utilisateur.php');

?>

<section class="faq-section">
    <input type="checkbox" id="q1">
    <label for="q1">QUi je suis </label>
    <p>... Le début de la réponse ...</p>
    <p>... Suite de la réponse et paragraphes optionnels ..... Suite de la réponse et paragraphes optionnels ..... Suite de la réponse et paragraphes optionnels ..... Suite de la réponse et paragraphes optionnels ..... Suite de la réponse et paragraphes optionnels ..... Suite de la réponse et paragraphes optionnels ..... Suite de la réponse et paragraphes optionnels ...</p>


    <input type="checkbox" id="q1">
    <label for="q1">Pourquoi la vie ?</label>
    <p>... Le début de la réponse ...</p>
    <p>... Suite de la réponse et paragraphes optionnels ...</p>
</section>



</body>

<?php
require('../FOOTER.php');

?>
</html>