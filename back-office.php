<?php include('model.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php'); ?>
    <title>Back-Office MMI Champs</title>
</head>

<body>
    <h1>Back-office</h1>
    <p>Les champs marqués d'un * sont obligatoire</p>
    <a href="logout.php">Se déconnecter</a>
    <?php if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin'] == 1) {
            echo '
<form action="register_prof.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2>Ajouter un prof</h2>
    <label class="form-label" for="nom">Prénom et NOM*</label>
    <input class="form-control" required type="text" name="nom">
    <label class="form-label" for="username">Nom d\'utilisateur* (utilisé uniquement pour la connexion)</label>
    <input class="form-control" required type="text" name="username">
    <label class="form-label" for="pwd">Mot de passe*</label>
    <input class="form-control" required type="password" name="pwd">
    <label class="form-label" for="bio">Bio</label>
    <textarea name="bio" id="" cols="30" rows="10"></textarea>
    <fieldset>
        <legend>Matières enseignées</legend>
        <label class="form-label" for="matiere_1">Matière 1</label>
        <select name="matiere_1" id="">
            <option value="">---</option>';

            foreach (getMatieres() as $matiere) {
                echo "<option value=" . $matiere['id_matiere'] . ">{$matiere['nom_matiere']}</option>";
            }

            echo '</select> <br>
        <label class="form-label" for="matiere_2">Matière 2</label>
        <select name="matiere_2" id="">
            <option value="">---</option>';

            foreach (getMatieres() as $matiere) {
                echo "<option value=" . $matiere['id_matiere'] . ">{$matiere['nom_matiere']}</option>";
            }

            echo '</select><br>
        <label class="form-label" for="matiere_3">Matière 3</label>
        
        <select name="matiere_3" id="">
            <option value="">---</option>';

            foreach (getMatieres() as $matiere) {
                echo "<option value=" . $matiere['id_matiere'] . ">{$matiere['nom_matiere']}</option>";
            }
            echo '
        </select><br>
    </fieldset>
    <fieldset>
        <legend>Permissions sur les sections du site</legend>
        <label class="form-check-label" for="permission_projets">Projets</label>
        <input class="form-check-input" type="checkbox" name="permission_projets" id="" value=1>
        <label class="form-check-label" for="permission_articles">Articles</label>
        <input class="form-check-input" type="checkbox" name="permission_articles" id="" value=1>
        <label class="form-check-label" for="permission_temoignages">Témoignages</label>
        <input class="form-check-input" type="checkbox" name="permission_temoignages" id="" value=1>
    </fieldset>
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
    </div>
</form>';
        }
    }
    if (isset($_SESSION['projets'])) {
        if ($_SESSION['projets'] == 1) {
            echo '
<form action="register_projet.php" method="post" enctype="multipart/form-data">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2>Ajouter un projet</h2>
    <label class="form-label" for="nom">Nom*</label>
    <input class="form-control" type="text" name="nom" id="">
    <label class="form-label" for="niveau">Niveau*</label>
    <select name="niveau" id="">
        <option value="BUT 1">BUT 1</option>
        <option value="BUT 2">BUT 2</option>
        <option value="BUT 3">BUT 3</option>
    </select>
    <label class="form-label" for="etudiants">Étudiants*</label>
    <input class="form-control" type="text" name="etudiants" id="">
    <label class="form-label" for="description">Description*</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <label class="form-label" for="image">Image</label>
    <input class="form-control" type="file" accept ="image/*" name="image" id="">
    <label class="form-label" for="lien">Lien</label>
    <input class="form-control" type="url" name="lien" id="">
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
    </div>
</form>';
        }
    }

    if (isset($_SESSION['temoignages'])) {
        if ($_SESSION['temoignages'] == 1) {
            echo '
<form action="register_temoignage.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2>Ajouter un témoignage</h2>
    <label class="form-label" for="titre">Titre*</label>
    <input class="form-control" type="text" name="titre" id="">
    <label class="form-label" for="contenu">Contenu du témoignage*</label>
    <textarea name="contenu" id="" cols="30" rows="10"></textarea>
    <label class="form-label" for="etudiant">Étudiant*</label>
    <input class="form-control" type="text" name="etudiant" id="">
    <label class="form-label" for="promo">Promotion de l\'étudiant*</label>
    <input class="form-control" type="text" name="promo" id="">
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
</div>
</form>';
        }
    }
    if (isset($_SESSION['articles'])) {
        if ($_SESSION['articles'] == 1) {
            echo '
<form action="register_article.php" method="post" enctype="multipart/form-data">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2>Ajouter un article</h2>
    <label class="form-label" for="titre">Titre*</label>
    <input class="form-control" required type="text" name="titre" id="">
    <label class="form-label" for="contenu">Contenu*</label>
    <textarea required name="contenu" id="" cols="30" rows="10"></textarea>
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
</div>
</form>';
        }
    }
    if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin'] == 1) {
            echo '
<form action="register_matiere.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2>Ajouter une matière</h2>
    <label class="form-label" for="nom">Nom*</label>
    <input class="form-control" type="text" name="nom" id="">
    <label class="form-label" for="description">Description*</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
</div>
</form>';
}
}
    if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin'] == 1) {  
    echo '<table>';
    foreach (getProfs() as $prof) {
        echo "
        <tr>
            <th>{$prof['nom_prof']}</th><th><a href='edit_user.php?{$prof['id_prof']}'>Modifier</a></th><th><a href='remove_user.php?{$prof['id_prof']}'>Supprimer</a></th>
        </tr>";
    }
    echo '</table>';
    }
}
    if (isset($_SESSION['admin'])) {
        if ($_SESSION['admin'] == 1) {  
    echo '<table>';
    foreach (getMatieres() as $matiere) {
        echo "
        <tr>
            <th>{$matiere['nom_matiere']}</th><th><a href='edit_matiere.php?{$matiere['id_matiere']}'>Modifier</a></th><th><a href='remove_matiere.php?{$matiere['id_matiere']}'>Supprimer</a></th>
        </tr>";
    }
    echo '</table>';
    }
}
    if (isset($_SESSION['projets'])) {
        if ($_SESSION['projets'] == 1) {  
    echo '<table>';
    foreach (getProjets() as $projet) {
        echo "
        <tr>
            <th>{$projet['nom_projet']}</th><th>{$projet['description']}</th><th><a href='edit_projet.php?{$projet['id_projet']}'>Modifier</a></th><th><a href='remove_projet.php?{$projet['id_projet']}'>Supprimer</a></th>
        </tr>";
    }
    echo '</table>';
    }
}
    if (isset($_SESSION['temoignages'])) {
        if ($_SESSION['temoignages'] == 1) {  
    echo '<table>';
    foreach (getTemoignages() as $temoignage) {
        echo "
        <tr>
            <th>{$temoignage['nom_temoignage']}</th><th>{$temoignage['contenu_temoignage']}</th><th><a href='edit_temoignage.php?{$temoignage['id_temoignage']}'>Modifier</a></th><th><a href='remove_temoignage.php?{$temoignage['id_temoignage']}'>Supprimer</a></th>
        </tr>";
    }
    echo '</table>';
    }
}
    if (isset($_SESSION['articles'])) {
        if ($_SESSION['articles'] == 1) {  
    echo '<table>';
    foreach (getArticles() as $article) {
        echo "
        <tr>
            <th>{$article['nom_article']}</th><th>{$article['contenu_article']}</th><th><a href='edit_article.php?{$article['id_article']}'>Modifier</a></th><th><a href='remove_article.php?{$article['id_article']}'>Supprimer</a></th>
        </tr>";
    }
    echo '</table>';
    }
}







?>
</body>

</html>