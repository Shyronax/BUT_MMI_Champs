<?php
include('model.php');
addArticle($_POST['nom'], $_POST['description']);
header('Location: back-office.php');
?>