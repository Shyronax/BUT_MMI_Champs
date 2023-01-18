<?php
include('model.php');
addUser($_POST['nom'], $_POST['username'], $_POST['pwd'], $_POST['bio'],  $_POST['permission_articles'], $_POST['permission_projets'], $_POST['permission_temoignages']);
addLien($_POST['matiere_1'], $_POST['matiere_2'], $_POST['matiere_3'], $_POST['nom']);
header('Location: back-office.php');
?>