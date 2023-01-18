<?php
include('model.php');
rmMatiere($_GET['id']);
header('Location: back-office');
?>