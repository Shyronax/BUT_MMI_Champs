<?php

session_start();

function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=u380906830_mmi;charset=UTF8;port=3308', 'u380906830_mmi', 'tU>!7t4AcJ25');
    return $db;
}

function login($login, $pass)
{
    $db = dbConnect();
    $hashpass = crypt($pass, '$2a$07$usesomesillystringforsalt$');
    $query = "SELECT * FROM utilisateur WHERE login = :login";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":login", $login, PDO::PARAM_STR);
    $result = $stmt->execute();
    if ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        if (hash_equals($hashpass, $result['mdp'])) {
            $_SESSION['name'] = $result['nom_prof'];
            $_SESSION['projets'] = $result['p_projets'];
            $_SESSION['articles'] = $result['p_articles'];
            $_SESSION['temoignages'] = $result['p_temoignages'];
            $_SESSION['admin'] = $result['p_admin'];
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function addUser($name, $login, $pass, $bio, $art=null, $proj=null, $tem=null)
{
    $hash = crypt($pass, '$2a$07$usesomesillystringforsalt$');
    $db = dbConnect();
    $query = "INSERT INTO utilisateur (nom_prof, login, mdp, bio, p_articles, p_projets, p_temoignages) VALUES (:nom_prof, :login, :mdp, :bio, :p_articles, :p_projets, :p_temoignages)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_prof", $name, PDO::PARAM_STR);
    $stmt->bindValue(":login", $login, PDO::PARAM_STR);
    $stmt->bindValue(":mdp", $hash, PDO::PARAM_STR);
    $stmt->bindValue(":bio", $bio, PDO::PARAM_STR);
    $stmt->bindValue(":p_articles", $art, PDO::PARAM_INT);
    $stmt->bindValue(":p_projets", $proj, PDO::PARAM_INT);
    $stmt->bindValue(":p_temoignages", $tem, PDO::PARAM_INT);
    $stmt->execute();
}

function addLien($mat1 = null, $mat2 = null, $mat3 = null, $nom)
{
    $db = dbConnect();
    $query = "SELECT * FROM utilisateur WHERE nom_prof = '$nom'";
    $stmt = $db->query($query);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $id = $result['id_prof'];
    if (isset($mat1)) {
        $query = "INSERT INTO lien_matiere (ext_prof, ext_matiere) VALUES (:ext_prof,:ext_matiere)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":ext_prof", $id, PDO::PARAM_INT);
        $stmt->bindValue(":ext_matiere", $mat1, PDO::PARAM_INT);
        $stmt->execute();
    }
    if (isset($mat2)) {
        $query = "INSERT INTO lien_matiere (ext_prof, ext_matiere) VALUES (:ext_prof,:ext_matiere)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":ext_prof", $id, PDO::PARAM_INT);
        $stmt->bindValue(":ext_matiere", $mat2, PDO::PARAM_INT);
        $stmt->execute();
    }
    if (isset($mat3)) {
        $query = "INSERT INTO lien_matiere (ext_prof, ext_matiere) VALUES (:ext_prof,:ext_matiere)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":ext_prof", $id, PDO::PARAM_INT);
        $stmt->bindValue(":ext_matiere", $mat3, PDO::PARAM_INT);
        $stmt->execute();
    }
}


function addArticle($nom, $contenu)
{
    $db = dbConnect();
    $query = "INSERT INTO article (nom_article, contenu_article, date_article, auteur) VALUES (:nom_article, :contenu_article, NOW(), :auteur)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_article", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_article", $contenu, PDO::PARAM_STR);
    $stmt->bindValue(":auteur", $_SESSION['name'], PDO::PARAM_STR);
    $stmt->execute();
}

function addProjet($nom_projet, $etudiants, $niveau, $lien, $image_projet, $description)
{
    $db = dbConnect();
    $target_dir = 'src/img/projet/';
    $target_file = $target_dir . basename($image_projet);
    move_uploaded_file($image_projet, $target_file);
    $query = "INSERT INTO projet (nom_projet, etudiants, niveau, lien, img_projet, description) VALUES (:nom_projet, :etudiants, :niveau, :lien, :img_projet, :description)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_projet", $nom_projet, PDO::PARAM_STR);
    $stmt->bindValue(":etudiants", $etudiants, PDO::PARAM_STR);
    $stmt->bindValue(":niveau", $niveau, PDO::PARAM_STR);
    $stmt->bindValue(":lien", $lien, PDO::PARAM_STR);
    $stmt->bindValue(":img_projet", $target_file, PDO::PARAM_STR);
    $stmt->bindValue(":description", $description, PDO::PARAM_STR);
    $stmt->execute();
}

function addTemoignage($etudiant, $promo, $nom_temoignage, $contenu_temoignage)
{
    $db = dbConnect();
    $query = "INSERT INTO temoignage (etudiant, promo, nom_temoignage, contenu_temoignage) VALUES (:etudiant, :promo, :nom_temoignage, :contenu_temoignage)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":etudiant", $etudiant, PDO::PARAM_STR);
    $stmt->bindValue(":promo", $promo, PDO::PARAM_STR);
    $stmt->bindValue(":nom_temoignage", $nom_temoignage, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_temoignage", $contenu_temoignage, PDO::PARAM_STR);
    $stmt->execute();
}

function addMatiere($nom, $description)
{
    $db = dbConnect();
    $query = "INSERT INTO matiere (nom_matiere, description) VALUES (:nom_matiere, :description)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_matiere", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":description", $description, PDO::PARAM_STR);
    $stmt->execute();
}

function editUser($id, $name, $bio, $art=null, $proj=null, $tem=null)
{
    $db = dbConnect();
    $query = "UPDATE utilisateur SET nom_prof=:nom_prof, bio=:bio, p_articles=:p_articles, p_projets=:p_projets, p_temoignages=:p_temoignages WHERE id_prof=:id_prof";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_prof", $name, PDO::PARAM_STR);
    $stmt->bindValue(":bio", $bio, PDO::PARAM_STR);
    $stmt->bindValue(":p_articles", $art, PDO::PARAM_INT);
    $stmt->bindValue(":p_projets", $proj, PDO::PARAM_INT);
    $stmt->bindValue(":p_temoignages", $tem, PDO::PARAM_INT);
    $stmt->bindValue(":id_prof", $id, PDO::PARAM_INT);
    $stmt->execute();
}

function editLien($mat1 = null, $mat2 = null, $mat3 = null, $id)
{
    $db = dbConnect();
    $query = "DELETE FROM lien_matiere WHERE :id_prof IN (ext_prof)";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":id_prof", $id, PDO::PARAM_INT);
    $stmt->execute();
    if (isset($mat1)) {
        $query = "INSERT INTO lien_matiere (ext_prof, ext_matiere) VALUES (:ext_prof,:ext_matiere)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":ext_prof", $id, PDO::PARAM_INT);
        $stmt->bindValue(":ext_matiere", $mat1, PDO::PARAM_INT);
        $stmt->execute();
    }
    if (isset($mat2)) {
        $query = "INSERT INTO lien_matiere (ext_prof, ext_matiere) VALUES (:ext_prof,:ext_matiere)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":ext_prof", $id, PDO::PARAM_INT);
        $stmt->bindValue(":ext_matiere", $mat2, PDO::PARAM_INT);
        $stmt->execute();
    }
    if (isset($mat3)) {
        $query = "INSERT INTO lien_matiere (ext_prof, ext_matiere) VALUES (:ext_prof,:ext_matiere)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":ext_prof", $id, PDO::PARAM_INT);
        $stmt->bindValue(":ext_matiere", $mat3, PDO::PARAM_INT);
        $stmt->execute();
    }
}


function editArticle($id, $nom, $contenu)
{
    $db = dbConnect();
    $query = "UPDATE article SET nom_article=:nom_article, contenu_article=:contenu_article WHERE id_article=:id_article";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_article", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_article", $contenu, PDO::PARAM_STR);
    $stmt->bindValue(":id_article", $id, PDO::PARAM_INT);
    $stmt->execute();
}

function editProjet($id, $nom_projet, $etudiants, $niveau, $lien, $description)
{
    $db = dbConnect();
    $query = "UPDATE projet SET nom_projet=:nom_projet, etudiants=:etudiants, lien=:lien, niveau=:niveau, description=:description WHERE id_projet=:id_projet";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_projet", $nom_projet, PDO::PARAM_STR);
    $stmt->bindValue(":etudiants", $etudiants, PDO::PARAM_STR);
    $stmt->bindValue(":niveau", $niveau, PDO::PARAM_STR);
    $stmt->bindValue(":lien", $lien, PDO::PARAM_STR);
    $stmt->bindValue(":description", $description, PDO::PARAM_STR);
    $stmt->bindValue(":id_projet", $id, PDO::PARAM_INT);
    $stmt->execute();
}

function editTemoignage($id, $etudiant, $promo, $nom_temoignage, $contenu_temoignage)
{
    $db = dbConnect();
    $query = "UPDATE temoignage SET etudiant=:etudiant, promo=:promo, nom_temoignage=:nom_temoignage, contenu_temoignage=:contenu_temoignage WHERE id_temoignage=:id_temoignage";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":etudiant", $etudiant, PDO::PARAM_STR);
    $stmt->bindValue(":promo", $promo, PDO::PARAM_STR);
    $stmt->bindValue(":nom_temoignage", $nom_temoignage, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_temoignage", $contenu_temoignage, PDO::PARAM_STR);
    $stmt->bindValue(":id_temoignage", $id, PDO::PARAM_INT);
    $stmt->execute();
}

function editMatiere($id, $nom, $description)
{
    $db = dbConnect();
    $query = "UPDATE matiere SET nom_matiere=:nom_matiere, description=:description WHERE id_matiere=:id_matiere";
    $stmt = $db->prepare($query);
    $stmt->bindValue(":nom_matiere", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":description", $description, PDO::PARAM_STR);
    $stmt->bindValue(":id_matiere", $id, PDO::PARAM_INT);
    $stmt->execute();
}

function getMatieres()
{
    $db = dbConnect();
    $query = "SELECT * FROM matiere";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getMatiere($id)
{
    $db = dbConnect();
    $query = "SELECT * FROM matiere WHERE id_matiere = :id_matiere";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id_matiere', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getProjets()
{
    $db = dbConnect();
    $query = "SELECT * FROM projet";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}
function getProjets_year1()
{
    $db = dbConnect();
    $query = "SELECT * FROM projet WHERE niveau = '1'";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}
function getProjets_year2()
{
    $db = dbConnect();
    $query = "SELECT * FROM projet WHERE niveau = '2'";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getProjet($id)
{
    $db = dbConnect();
    $query = "SELECT * FROM projet WHERE id_projet = :id_projet";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id_projet', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getProfs()
{
    $db = dbConnect();
    $query = "SELECT * FROM utilisateur, matiere, lien_matiere WHERE id_prof = ext_prof AND id_matiere = ext_matiere GROUP BY id_prof";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getProf($id)
{
    $db = dbConnect();
    $query = "SELECT * FROM utilisateur, matiere, lien_matiere WHERE id_prof = :id_prof AND ext_prof = :id_prof AND id_matiere = ext_matiere";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id_prof', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getArticles()
{
    $db = dbConnect();
    $query = "SELECT * FROM article";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getArticle($id)
{
    $db = dbConnect();
    $query = "SELECT * FROM article WHERE id_article = :id_article";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id_article', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getTemoignages()
{
    $db = dbConnect();
    $query = "SELECT * FROM temoignage";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getTemoignage($id)
{
    $db = dbConnect();
    $query = "SELECT * FROM temoignage WHERE id_temoignage = :id_temoignage";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':id_temoignage', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function rmUser($id)
{
    if ($_SESSION['admin'] == 1) {
        $db = dbConnect();
        $query = "DELETE FROM prof, lien_matiere WHERE :id_prof IN (id_prof, ext_prof)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":id_prof", $id, PDO::PARAM_INT);
        $stmt->execute();
    } else {
        return false;
    }
}
function rmMatiere($id)
{
    if ($_SESSION['admin'] == 1) {
        $db = dbConnect();
        $query = "DELETE FROM matiere, lien_matiere WHERE :id_matiere IN (id_matiere, ext_matiere)";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":id_matiere", $id, PDO::PARAM_INT);
        $stmt->execute();
    } else {
        return false;
    }
}
function rmProjet($id)
{
    if ($_SESSION['projets'] == 1) {
        $db = dbConnect();
        $query = "DELETE FROM projet WHERE id_projet = :id_projet";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":id_projet", $id, PDO::PARAM_INT);
        $stmt->execute();
    } else {
        return false;
    }
}
function rmTemoignage($id)
{
    if ($_SESSION['temoignages'] == 1) {
        $db = dbConnect();
        $query = "DELETE FROM temoignage WHERE id_temoignage = :id_temoignage";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":id_temoignage", $id, PDO::PARAM_INT);
        $stmt->execute();
    } else {
        return false;
    }
}
function rmArticle($id)
{
    if ($_SESSION['articles'] == 1) {
        $db = dbConnect();
        $query = "DELETE FROM article WHERE id_article = :id_article";
        $stmt = $db->prepare($query);
        $stmt->bindValue(":id_article", $id, PDO::PARAM_INT);
        $stmt->execute();
    } else {
        return false;
    }
    }

function logout()
{
    session_destroy();
}
