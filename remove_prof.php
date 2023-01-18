<?php
include('model.php');
rmProf($_GET['id']);
header('Location: back-office');
?>