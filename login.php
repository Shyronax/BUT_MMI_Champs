<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('head.php'); include('model.php'); ?>
    <title>Connexion</title>
</head>
<body>
<form action="traite_login.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center">
    <h1>Connexion</h1>
    <label class='form-label' for="username">Nom d'utilisateur</label>
    <input class='form-control' type="text" name="nom" id="">
    <label class='form-label' for="mdp">Mot de passe</label>
    <input class='form-control' type="password" name="mdp" id="">
    <input class='btn btn-primary' type="submit" value="Se connecter">
</div>
</form>
</body>
</html>