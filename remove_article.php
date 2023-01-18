<?php
include('model.php');
rmArticle($_GET['id']);
header('Location: back-office');
?>