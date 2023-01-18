<?php
include('model.php');
editArticle($_POST['id'] ,$_POST['titre'], $_POST['contenu']);
header('Location: back-office.php');
?>