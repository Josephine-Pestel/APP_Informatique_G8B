<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- En-tête de la page -->
    <link type="text/css" rel="stylesheet" href="../CSS_files/P_ResultatTableau.css?t=<? echo time(); ?>" media="all">
    <!--<link rel="stylesheet" href="P_Accueil_Payen.css" />-->
    <meta charset="utf-8" />
    <title>WINK FOR INIFINITE MEASURES</title>
</head>



<body>

<!-- Appel En-Tete et Menu -->

<?php
require('ENTETE_MENU.php');

?>

<!-- Milieu -->

<h1 class="titre_tableau"> TABLEAU DE RESULTATS </h1>


<div class="fond"> </div>
<table class="resultat_tableau">
    <tr>
        <th> TEST </th>
        <th> DATE </th>
        <th> TEMPS </th>
        <th> POURCENTAGE </th>
        <th> NIVEAU </th>
    </tr>

    <tr>
        <td> température </td>
        <td> ajd </td>
        <td> 40s </td>
        <td> 20% </td>
        <td> 4/10 </td>
    </tr>

    <tr>
        <td> sonore </td>
        <td> hier </td>
        <td> 40s </td>
        <td> 20% </td>
        <td> 4/10 </td>
    </tr>

    <tr>
        <td> visuel </td>
        <td> ajd </td>
        <td> 40s </td>
        <td> 20% </td>
        <td> 4/10 </td>
    </tr>

    <tr>
        <td> sonore </td>
        <td> octobre </td>
        <td> 40s </td>
        <td> 20% </td>
        <td> 4/10 </td>
    </tr>

    <tr>
        <td> température </td>
        <td> septembre </td>
        <td> 40s </td>
        <td> 20% </td>
        <td> 4/10 </td>
    </tr>

    <tr>
        <td> visuel </td>
        <td> demain </td>
        <td> 40s </td>
        <td> 20% </td>
        <td> 4/10 </td>
    </tr>


</table>

<a href="MonCompteUtilisateur.php">
    <button class="bouton_retour"> RETOUR</button>
</a>


</body>

<!-- Appel Footer -->
<?php
require('FOOTER.php');

?>

</html>