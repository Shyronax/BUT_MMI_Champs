<?php
include('model.php');
editUser($_POST['id'], $_POST['nom'], $_POST['bio'],  $_POST['permission_articles'], $_POST['permission_projets'], $_POST['permission_temoignages']);
editLien($_POST['matiere_1'], $_POST['matiere_2'], $_POST['matiere_3'], $_POST['id']);
header('Location: back-office.php');
?>