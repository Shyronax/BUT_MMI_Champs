<?php
include('model.php');
addUser($_POST['nom'], $_POST['username'], $_POST['pwd'], $_POST['mail'], $_POST['bio'], $_POST['matiere_1'], $_POST['matiere_2'], $_POST['matiere_3'], $_POST['permission_articles'], $_POST['permission_projets'], $_POST['permission_temoignages']);
header('Location: back-office.php');
?>