<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS_files/MesResultats.css" />
    <title>Mes Résultats</title>
</head>
<body>
    <?php include("ENTETE_MENU_Utilisateur.php"); ?>
<section id="canvas">
    <div id="canvas_tableau">
        <h2>TABLEAU</h2>
        <div class="texte_milieu">
            <p>Les résultats sous forme de tableau vous permettant d'avoir une vision détaillée de vos scores depuis la création de vos comptes</p>
        </div>
        <a href="MesResultatsTableau.php" class="troisieme_bouton" alt="Accéder au tableau" target="_blank">TABLEAU</a>
    </>
    </div>
    <aside id="canvas_graphique">
        <h2>GRAPHIQUE</h2>
        <div class="texte_milieu">
            <p>Les résultats sous forme de graphiques vous permettant d'avoir une vision détaillée de vos scores depuis votre inscription</p>
        </div>
        <a href="MesResultatsGraphique.php" class="quatrieme_bouton" alt="Accéder au graphique" target="_blank">GRAPHIQUE</a>
    </aside>
</section>
</body>
<footer>
<?php include("FOOTER.php"); ?>
</footer>
</html>