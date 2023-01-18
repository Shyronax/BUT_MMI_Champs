<?php
include('model.php');
editMatiere($_POST['id'], $_POST['nom'], $_POST['description']);
header('Location: back-office.php');
?>