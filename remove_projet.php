<?php
include('model.php');
rmProjet($_GET['id']);
header('Location: back-office');
?>