
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Forum.css" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>


<body>
<!-- header et menu -->
<?php include("ENTETE_MENU.php"); ?>


<!--  ---------------------- FORUM ---------------------------------------   -->
<section>

    <h1 id="titre_forum"> FORUM </h1>
    <div id="description_forum">
        <p>Bienvenue sur le forum, profitez-en pour poser vos questions sur notre système ou sur notre site internet !</p>
    </div>

    <button class="bouton_discussion">Ajouter une discussion</button>



    <table>
        <tr>
        <td>Fil de discussion </td>
        <td>Thème</td>
        <td>Date</td>
        <td>Lancée par</td>
        <td>Dernier message de</td>
    </tr>
        <tr>
            <td>1</td>
            <td>température</td>
            <td>01/02/2020</td>
            <td>linaelle</td>
            <td>josephine</td>
        </tr>

    </table>


</section>


<footer>
    <?php include("FOOTER.php"); ?>
</footer>


</body>
</html>
