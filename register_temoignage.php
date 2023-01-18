<?php
include('model.php');
addTemoignage($_POST['etudiant'], $_POST['promo'], $_POST['titre'], $_POST['contenu']);
header('Location: back-office.php');
?>