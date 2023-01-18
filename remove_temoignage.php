<?php
include('model.php');
rmTemoignage($_GET['id']);
header('Location: back-office');
?>