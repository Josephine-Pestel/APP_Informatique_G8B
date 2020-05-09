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
require('ENTETE_MENU_Admin.php');

?>

<?php
$bdd= new PDO( 'mysql:host=localhost;dbname=g8b;port=3308;charset=UTF8', 'root', '');

?>


<div id="menu">
    <!-- MENU 1-->
    <div>

            <?php
            $req = $bdd->query('SELECT question, reponse FROM faq');
            while ($donnees = $req->fetch()) { ?>
                <div class="menu">
                    <div >

                            <p class="titre_question"> &#11166; <?php echo  $donnees['question'] ?></p>

                    </div>

                    <div id="sousmenu2" >
                        <div class="sousmenu">
                            <?php echo  $donnees['reponse'] ?>
                        </div>
                    </div>

                </div>
                <?php
            }
            $req->closeCursor();
            ?>
        </a>
    </div>

</div>



</body>

<!-- Appel Footer -->
<?php
require('FOOTER_Admin.php');

?>


</html>
