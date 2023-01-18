<?php
include('model.php');
editMatiere($_POST['id'], $_POST['nom'], $_POST['description']);
var_dump($_POST['nom']);
var_dump($_POST['id']);
// header('Location: back-office.php');
?>