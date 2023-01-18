<?php include('model.php');
if(login($_POST['username'], $_POST['mdp'])){
    header('Location: back-office');
// } else {
//     header('Location: login.php?err=login');
// };
?>