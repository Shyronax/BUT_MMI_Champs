<?php
include('model.php');
editProjet($_POST['id'], $_POST['nom'], $_POST['etudiants'], $_POST['niveau'], $_POST['lien'], $_POST['description']);
header('Location: back-office.php');
?>
