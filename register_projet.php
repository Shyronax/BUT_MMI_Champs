<?php
include('model.php');
addProjet($_POST['nom'], $_POST['etudiants'], $_POST['niveau'], $_POST['lien'], $_FILES['image']['tmp_name'], $_POST['description'],);
header('Location: back-office.php');
?>
