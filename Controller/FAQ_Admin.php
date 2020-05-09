<link type="text/css" rel="stylesheet" href=../View/CSS_files/ajoutUtilisateur_Admin.css?t=<? echo time(); ?>

<?php
require('../Model/FAQ_Admin.php');

$question_rentree=verifQuestion();

ajoutQuestionFAQ();
echo 'La question réponse a été ajoutée à la bdd';?>

<a href="../View/HTML_Files/Administrateur/gererUtilisateur.php">
    <button class="retour">RETOUR </button>
</a>
