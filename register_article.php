<?php
include('model.php');
addArticle($_POST['titre'], $_POST['contenu'], $_POST['synopsis'], $_FILES['miniature']['tmp_name']);
// header('Location: back-office.php');
?>