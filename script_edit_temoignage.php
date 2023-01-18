<?php
include('model.php');
editTemoignage($_POST['id'], $_POST['etudiant'], $_POST['promo'], $_POST['titre'], $_POST['contenu']);
header('Location: back-office.php');
?>