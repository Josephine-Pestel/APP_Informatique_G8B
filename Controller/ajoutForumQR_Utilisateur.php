<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> blog com post</title>
</head>

<body>

<?php
require('../Model/ajoutForumQR.php');
ajoutCommentaireBDD();

header("Refresh:0; url=../View/HTML_Files/Utilisateur/forumQR.php? num_de_la_discussion=".$_POST['numDiscussion'] );
?>


</body>
</html>