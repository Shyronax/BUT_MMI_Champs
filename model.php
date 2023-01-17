<?php

session_start();

function dbConnect(){
    $db=new PDO('mysql:host=localhost;dbname=mmi-bdd;port=3306', 'root', '');
    return $db;
}

function login($login, $pass){
    $db=dbConnect();
    $query="SELECT * FROM utilisateur WHERE login = :login";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":login", $login, PDO::PARAM_STR);
    $result=$stmt->execute();
    if ($result=$stmt->fetch(PDO::FETCH_ASSOC)){
        if(password_verify($pass, $result['mdp'])){
            $_SESSION['name']=$result['nom_prof'];
            $_SESSION['admin']=$result['p_admin'];
            return true;
        } else {return false;}   
    } else {return false;} 
}

function addUser($name, $login, $pass, $mail, $bio, $art, $proj, $tem){
    $hash=password_hash($pass, PASSWORD_DEFAULT);
    $db=dbConnect();
    $query="INSERT INTO utilisateur (nom_prof, login_prof, mdp, mail, bio, p_articles, p_projets, p_temoignages) VALUES (:nom_prof, :login_prof, :mdp, :mail, :bio, :p_articles, :p_projets, :p_temoignages)";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":nom_prof", $name, PDO::PARAM_STR);
    $stmt->bindValue(":login_prof", $login, PDO::PARAM_STR);
    $stmt->bindValue(":mdp", $hash, PDO::PARAM_STR);
    $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
    $stmt->bindValue(":bio", $bio, PDO::PARAM_STR);
    $stmt->bindValue(":p_articles", $art, PDO::PARAM_INT);
    $stmt->bindValue(":p_projets", $proj, PDO::PARAM_INT);
    $stmt->bindValue(":p_temoignages", $tem, PDO::PARAM_INT);
    $stmt->execute();
}

function addLien($mat1=null, $mat2=null, $mat3=null, $nom){
    $db=dbConnect();
    $query="SELECT * FROM utilisateur WHERE nom_prof = $nom";
    $stmt=$db->query($query);
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    $id=$result['id_user'];
    if (isset($mat1)) {
        $query="INSERT INTO lien_matiere (ext_prof, ext_matiere) VALUES (:ext_prof,:ext_matiere)";
        $stmt=$db->prepare($query);
        $stmt->bindValue(":ext_prof", $id, PDO::PARAM_INT);
        $stmt->bindValue(":ext_matiere", $mat1, PDO::PARAM_INT);
        $stmt->execute();
    }
    if (isset($mat2)) {
        $query="INSERT INTO lien_matiere (ext_prof, ext_matiere) VALUES (:ext_prof,:ext_matiere)";
        $stmt=$db->prepare($query);
        $stmt->bindValue(":ext_prof", $id, PDO::PARAM_INT);
        $stmt->bindValue(":ext_matiere", $mat2, PDO::PARAM_INT);
        $stmt->execute();
    }
    if (isset($mat3)) {
        $query="INSERT INTO lien_matiere (ext_prof, ext_matiere) VALUES (:ext_prof,:ext_matiere)";
        $stmt=$db->prepare($query);
        $stmt->bindValue(":ext_prof", $id, PDO::PARAM_INT);
        $stmt->bindValue(":ext_matiere", $mat3, PDO::PARAM_INT);
        $stmt->execute();
    }
}


function addArticle($nom, $contenu, $synopsis, $miniature){
    $db=dbConnect();
    $target_file = 'src/img/article/' . basename($_FILES['image']);
    $query="INSERT INTO article (nom_article, contenu_article, date_article, synopsis, miniature_article, auteur) VALUES (:nom_article, :contenu_article, NOW(), :synopsis, :miniature_article)" . $_SESSION['name'];
    $target_dir = 'src/img/art/';
    $target_file = $target_dir . basename($miniature);
    move_uploaded_file($miniature, $target_file);
    $stmt=$db->prepare($query);
    $stmt->bindValue(":nom_article", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_article", $contenu, PDO::PARAM_STR);
    $stmt->bindValue(":synopsis_fr", $synopsis, PDO::PARAM_STR);
    $stmt->bindValue(":miniature_article", $target_file, PDO::PARAM_STR);
    $stmt->execute();
}

function addProjet($nom_projet, $etudiants, $annee_projet, $niveau, $iframe_projet, $lien_projet, $image_projet, $description){
    $db=dbConnect();
    $target_dir = 'src/img/projet/';
    $target_file = $target_dir . basename($image_projet);
    move_uploaded_file($image_projet, $target_file);
    $query="INSERT INTO projet (nom_projet, etudiants, annee_projet, niveau, iframe_projet, lien_projet, image_projet, description) VALUES (:nom_projet, :etudiants, :annee_projet, :niveau, :iframe_projet, :lien_projet, :image_projet, :description)";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":nom_projet", $nom_projet, PDO::PARAM_STR);
    $stmt->bindValue(":etudiants", $etudiants, PDO::PARAM_STR);
    $stmt->bindValue(":annee_projet", $annee_projet, PDO::PARAM_STR);
    $stmt->bindValue(":niveau", $niveau, PDO::PARAM_STR);
    $stmt->bindValue(":iframe_projet", $iframe_projet, PDO::PARAM_STR);
    $stmt->bindValue(":lien_projet", $lien_projet, PDO::PARAM_STR);
    $stmt->bindValue(":image_projet", $target_file, PDO::PARAM_STR);
    $stmt->bindValue(":description", $description, PDO::PARAM_STR);
    $stmt->execute();
}

function addTemoignage($etudiant, $promo, $titre, $contenu_temoignage){
    $db=dbConnect();
    $query="INSERT INTO temoignage (etudiant, promo, titre, contenu_temoignage) VALUES (:etudiant, :promo, :titre, :contenu_temoignage)";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":etudiant", $etudiant, PDO::PARAM_STR);
    $stmt->bindValue(":promo", $promo, PDO::PARAM_STR);
    $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_temoignage", $contenu_temoignage, PDO::PARAM_STR);
    $stmt->execute();
}

function addMatiere($nom, $description){
    $db=dbConnect();
    $query="INSERT INTO matiere (nom, description) VALUES (:nom, :description)";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":nom", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":description", $description, PDO::PARAM_STR);
    $stmt->execute();
}

function getMatieres(){
    $db=dbConnect();
    $query="SELECT * FROM matiere";
    $stmt=$db->prepare($query);
    $stmt->execute();
    $result=$stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getProjets(){
    $db=dbConnect();
    $query="SELECT * FROM projet";
    $stmt=$db->prepare($query);
    $stmt->execute();
    $result=$stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getProjet($id){
    $db=dbConnect();
    $query="SELECT * FROM projet WHERE 'id_projet' = ':id_projet'";
    $stmt=$db->prepare($query);
    $stmt->bindValue(':id_projet', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getProfs(){
    $db=dbConnect();
    $query="SELECT * FROM utilisateur";
    $stmt=$db->prepare($query);
    $stmt->execute();
    $result=$stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getProf($id){
    $db=dbConnect();
    $query="SELECT * FROM utilisateur WHERE 'id_prof' = ':id_prof'";
    $stmt=$db->prepare($query);
    $stmt->bindValue(':id_prof', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getArticles(){
    $db=dbConnect();
    $query="SELECT * FROM article";
    $stmt=$db->prepare($query);
    $stmt->execute();
    $result=$stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function getArticle($id){
    $db=dbConnect();
    $query="SELECT * FROM article WHERE 'id_article' = ':id_article'";
    $stmt=$db->prepare($query);
    $stmt->bindValue(':id_article', $id, PDO::PARAM_INT);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getTemoignages(){
    $db=dbConnect();
    $query="SELECT * FROM temoignage";
    $stmt=$db->prepare($query);
    $stmt->execute();
    $result=$stmt->fetchall(PDO::FETCH_ASSOC);
    return $result;
}

function rmUser($id){
    if ($_SESSION['admin'] == 1){
        $db=dbConnect();
        $query="DELETE FROM prof WHERE id_prof = :id_prof";
        $stmt=$db->prepare($query);
        $stmt->bindValue(":id_prof", $id, PDO::PARAM_INT);
        $stmt->execute();
    } else {
        return false;
    }
}
function rmMatiere($id){
    $db=dbConnect();
    $query="DELETE FROM matiere WHERE id_matiere = :id_matiere";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":id_matiere", $id, PDO::PARAM_INT);
    $stmt->execute();
}
function rmProjet($id){
    $db=dbConnect();
    $query="DELETE FROM projet WHERE id_projet = :id_projet";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":id_projet", $id, PDO::PARAM_INT);
    $stmt->execute();
}
function rmTemoignage($id){
    $db=dbConnect();
    $query="DELETE FROM temoignage WHERE id_temoignage = :id_temoignage";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":id_temoignage", $id, PDO::PARAM_INT);
    $stmt->execute();
}
function rmArticle($id){
    $db=dbConnect();
    $query="DELETE FROM article WHERE id_article = :id_article";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":id_article", $id, PDO::PARAM_INT);
    $stmt->execute();
}

function logout(){
    session_destroy();
}
