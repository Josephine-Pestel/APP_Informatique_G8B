<link type="text/css" rel="stylesheet" href="../CSS_files/FAQ.css?t=<? echo time(); ?>" media="all">

<?php
require('../../../Model/Forum.php');


$recupDiscussionForum=recupDiscussionForum();

while ($donnees = $recupDiscussionForum->fetch()) { ?>
    <tr>
            <th>
                <a href="#" class="Date"><?php echo $donnees['idDiscussion'] ?></a>
            </th>
            <th><p class="Score"><?php echo $donnees['theme'] ?></p></th>
            <th><p class="Score"><?php echo $donnees['date_discussion'] ?></p></th>
            <th><p class="Date"><?php echo $donnees['originaire'] ?></p></th>
        </tr>
    <?php
}

$recupDiscussionForum->closeCursor();
?>

