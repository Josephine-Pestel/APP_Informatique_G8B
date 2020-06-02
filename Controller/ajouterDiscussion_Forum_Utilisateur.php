<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<?php
require('../Model/ajoutDiscussion_Forum.php');


ajoutdiscussionBDD();
header("Refresh:0; url=../View/HTML_Files/Utilisateur/forumDiscussion.php");