<?php
include('model.php');
addArticle($_POST['titre'], $_POST['contenu'], $_POST['synopsis'], $_POST['miniature']);
header('Location: back-office.php');
?>