<?php
include('model.php');
var_dump($_POST['titre']);
editArticle($_GET['id'], $_POST['titre'], $_POST['contenu']);
var_dump($_POST['titre']);
var_dump($_GET['id']);
// header('Location: back-office.php');
?>