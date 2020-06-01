<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../../CSS_files/FAQ.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
    <script src="../../Javascript_Files/FAQ.js"></script>

</head>



<body>
<!-- Milieu -->
<!-- Bannière -->

<?php
session_start();
require('ENTETE_MENU_SansCompte.php');

?>

<?php
$bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', 'HpB9ADcAKZrU');

?>


<div id="menu">
    <!-- MENU 1-->
    <div>

        <?php
        require('../../../Controller/FAQ.php');
        ?>

    </div>

</div>



</body>

<!-- Appel Footer -->
<?php
require('FOOTER_SansCompte.php');

?>


</html>
