<?php
include('model.php');
addProjet($_POST['nom'], $_POST['etudiants'], $_POST['annee'], $_POST['niveau'], $_POST['iframe'], $_POST['lien'], $_POST[''], $_POST['description'],);
header('Location: back-office.php');
?>