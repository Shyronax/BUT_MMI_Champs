<?php include('model.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('head.php');?>
    <title>Back-Office MMI Champs</title>
</head>
<body>
    <h1>Back-office</h1>
<form action="register_prof.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center">
    <h2>Ajouter un prof</h2>
    <label class='form-label' for="nom">Prénom et NOM*</label>
    <input class='form-control' required type="text" name="nom">
    <label class='form-label' for="username">Nom d'utilisateur* (utilisé uniquement pour la connexion)</label>
    <input class='form-control' required type="text" name="username">
    <label class='form-label' for="pwd">Mot de passe*</label>
    <input class='form-control' required type="password" name="pwd">
    <label class='form-label' for="mail">Adresse mail*</label>
    <input class='form-control' required type="mail" name="mail">
    <label class='form-label' for="bio">Bio</label>
    <textarea name="bio" id="" cols="30" rows="10"></textarea>
    <fieldset>
        <legend>Matières enseignées</legend>
        <label class='form-label' for="matiere_1">Matière 1</label>
        <select name="matiere_1" id="">
            <option value="">---</option>
        <?php
        foreach(getMatieres() as $matiere){
            echo "<option value=".$matiere['id_matiere'].">{$matiere['nom_matiere']}</option>";
        }
        ?>
        </select>
        <label class='form-label' for="matiere_2">Matière 2</label>
        <select name="matiere_2" id="">
            <option value="">---</option>
        <?php
        foreach(getMatieres() as $matiere){
            echo "<option value=".$matiere['id_matiere'].">{$matiere['nom_matiere']}</option>";
        }
        ?>
        <label class='form-label' for="matiere_3">Matière 3</label>
        </select>
        <select name="matiere_3" id="">
            <option value="">---</option>
        <?php
        foreach(getMatieres() as $matiere){
            echo "<option value=".$matiere['id_matiere'].">{$matiere['nom_matiere']}</option>";
        }
        ?>
        </select>
    </fieldset>
    <fieldset>
        <legend>Permissions sur les sections du site</legend>
        <label class='form-check-label' for="permission_projets">Projets</label>
        <input class='form-check-input' type="checkbox" name="permission_projets" id="">
        <label class='form-check-label' for="permission_articles">Articles</label>
        <input class='form-check-input' type="checkbox" name="permission_articles" id="">
        <label class='form-check-label' for="permission_temoignages">Témoignages</label>
        <input class='form-check-input' type="checkbox" name="permission_temoignages" id="">
    </fieldset>
    <input class='btn btn-primary my-4' type="submit" value="Envoyer">
    </div>
</form>

<form action="register_projet.php" method="post" enctype="multipart/form-data">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center">
    <h2>Ajouter un projet</h2>
    <label class='form-label' for="nom">Nom*</label>
    <input class='form-control' type="text" name="nom" id="">
    <label class='form-label' for="niveau">Niveau*</label>
    <select name="niveau" id="">
        <option value="BUT 1">BUT 1</option>
        <option value="BUT 2">BUT 2</option>
        <option value="BUT 3">BUT 3</option>
    </select>
    <label class='form-label' for="annee">Année de réalisation*</label>
    <input class='form-control' type="text" name="annee" id="">
    <label class='form-label' for="etudiants">Étudiants*</label>
    <input class='form-control' type="text" name="etudiants" id="">
    <label class='form-label' for="description">Description*</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <label class='form-label' for="image">Image</label>
    <input class='form-control' type="file" accept ="image/*" name="image" id="">
    <label class='form-label' for="lien">Lien</label>
    <input class='form-control' type="url" name="lien" id="">
    <label class='form-label' for="iframe">Iframe (ex: vidéo YouTube)</label>
    <input class='form-control' type="url" name="iframe" id="">
    <input class='btn btn-primary my-4' type="submit" value="Envoyer">
    </div>
</form>
    
<form action="register_temoignage.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center">
    <h2>Ajouter un témoignage</h2>
    <label class='form-label' for="titre">Titre*</label>
    <input class='form-control' type="text" name="titre" id="">
    <label class='form-label' for="contenu">Contenu du témoignage*</label>
    <textarea name="contenu" id="" cols="30" rows="10"></textarea>
    <label class='form-label' for="etudiant">Étudiant*</label>
    <input class='form-control' type="text" name="etudiant" id="">
    <label class='form-label' for="promo">Promotion de l'étudiant*</label>
    <input class='form-control' type="text" name="promo" id="">
    <input class='btn btn-primary my-4' type="submit" value="Envoyer">
</div>
</form>
    
<form action="register_article.php" method="post" enctype="multipart/form-data">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center">
    <h2>Ajouter un article</h2>
    <label class='form-label' for="titre">Titre*</label>
    <input class='form-control' required type="text" name="titre" id="">
    <label class='form-label' for="synopsis">Résumé ou accroche*</label>
    <textarea name="synopsis" id="" cols="100" rows="20"></textarea>
    <label class='form-label' for="contenu">Contenu*</label>
    <textarea required name="contenu" id="" cols="30" rows="10"></textarea>
    <label class='form-label' for="miniature">Miniature</label>
    <input class='form-control' type="file" accept ="image/*" name="miniature" id="">
    <input class='btn btn-primary my-4' type="submit" value="Envoyer">
</div>
</form>
    
<form action="register_matiere.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center">
    <h2>Ajouter une matière</h2>
    <label class='form-label' for="nom">Nom*</label>
    <input class='form-control' type="text" name="nom" id="">
    <label class='form-label' for="description">Description*</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <input class='btn btn-primary my-4' type="submit" value="Envoyer">
</div>
</form>
    
</body>
</html>