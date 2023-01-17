<?php include('model.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('head.php');?>
    <title>Back-Office MMI Champs</title>
</head>
<body>
<form action="register_prof.php" method="post">
    <label for="nom">Prénom et NOM*</label>
    <input required type="text" name="nom">
    <label for="username">Nom d'utilisateur* (utilisé uniquement pour la connexion)</label>
    <input required type="text" name="username">
    <label for="pwd">Mot de passe*</label>
    <input required type="password" name="pwd">
    <label for="mail">Adresse mail*</label>
    <input required type="mail" name="mail">
    <label for="bio">Bio</label>
    <textarea name="bio" id="" cols="30" rows="10"></textarea>
    <fieldset>
        <legend>Matières enseignées</legend>
        <label for="matiere_1">Matière 1</label>
        <select name="matiere_1" id="">
        <?php
        foreach(getMatieres() as $matiere){
            echo "<option value=".$matiere['id_matiere'].">$nom_matiere</option>";
        }
        ?>
        </select>
        <label for="matiere_2">Matière 2</label>
        <select name="matiere_2" id="">
        <?php
        foreach(getMatieres() as $matiere){
            echo "<option value=".$matiere['id_matiere'].">$nom_matiere</option>";
        }
        ?>
        <label for="matiere_3">Matière 3</label>
        </select>
        <select name="matiere_3" id="">
        <?php
        foreach(getMatieres() as $matiere){
            echo "<option value=".$matiere['id_matiere'].">$nom_matiere</option>";
        }
        ?>
        </select>
    </fieldset>
    <fieldset>
        <legend>Permissions sur les sections du site</legend>
        <label for="permission_projets">Projets</label>
        <input type="checkbox" name="permission_projets" id="">
        <label for="permission_articles">Articles</label>
        <input type="checkbox" name="permission_articles" id="">
        <label for="permission_temoignages">Témoignages</label>
        <input type="checkbox" name="permission_temoignages" id="">
    </fieldset>
    <input type="submit" value="Envoyer">
</form>

<form action="register_projet.php" method="post" enctype="multipart/form-data">
    <label for="nom">Nom*</label>
    <input type="text" name="nom" id="">
    <label for="niveau">Niveau*</label>
    <select name="niveau" id="">
        <option value="BUT 1">BUT 1</option>
        <option value="BUT 2">BUT 2</option>
        <option value="BUT 3">BUT 3</option>
    </select>
    <label for="annee">Année de réalisation*</label>
    <input type="month" name="anne" id="">
    <label for="etudiants">Étudiants*</label>
    <input type="text" name="etudiants" id="">
    <label for="description">Description*</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <label for="image">Image</label>
    <input type="file" accept ="image/*" name="image" id="">
    <label for="lien">Lien</label>
    <input type="url" name="lien" id="">
    <label for="iframe">Iframe (ex: vidéo YouTube)</label>
    <input type="url" name="iframe" id="">
    <input type="submit" value="Envoyer">

</form>

<form action="register_temoignage.php" method="post">
    <label for="titre">Titre*</label>
    <input type="text" name="titre" id="">
    <label for="contenu">Contenu du témoignage*</label>
    <textarea name="contenu" id="" cols="30" rows="10"></textarea>
    <label for="etudiant">Étudiant*</label>
    <input type="text" name="etudiant" id="">
    <label for="promo">Promotion de l'étudiant*</label>
    <input type="text" name="promo" id="">
    <input type="submit" value="Envoyer">
</form>

<form action="register_article.php" method="post" enctype="multipart/form-data">
    <label for="titre">Titre*</label>
    <input required type="text" name="titre" id="">
    <label for="synopsis">Résumé ou accroche*</label>
    <textarea name="synopsis" id="" cols="100" rows="20"></textarea>
    <label for="contenu">Contenu*</label>
    <textarea required name="contenu" id="" cols="30" rows="10"></textarea>
    <label for="miniature">Miniature</label>
    <input type="file" accept ="image/*" name="miniature" id="">
    <input type="submit" value="Envoyer">
</form>

<form action="register_matiere.php" method="post">
    <label for="nom">Nom*</label>
    <input type="text" name="nom" id="">
    <label for="description">Description*</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>