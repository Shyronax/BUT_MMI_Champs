<?php
include('model.php');
addArticle($_POST['titre'], $_POST['contenu']);
header('Location: back-office.php');
