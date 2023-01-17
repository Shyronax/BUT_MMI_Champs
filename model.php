<?php

session_start();

function dbConnect(){
    $db=new PDO('mysql:host=localhost;dbname=mmichamps;port=3306', 'root', '');
    return $db;
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
    $stmt->bindValue(":bio", $bfr, PDO::PARAM_STR);
    $stmt->bindValue(":p_articles", $art, PDO::PARAM_INT);
    $stmt->bindValue(":p_projets", $proj, PDO::PARAM_INT);
    $stmt->bindValue(":p_temoignages", $tem, PDO::PARAM_INT);
    $stmt->execute();
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

function addArticle($nom, $contenu, $synopsis, $url_miniature){
    $db=dbConnect();
    $target_file = 'src/img/proj/' . basename($_FILES['image']);
    $query="INSERT INTO article (nom_article, contenu_article, date_article, synopsis, miniature_article, auteur) VALUES (:nom_article, :contenu_article, NOW(), :synopsis, :miniature_article, $_SESSION['name'])";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":nom_article", $nom, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_article", $contenu, PDO::PARAM_STR);
    $stmt->bindValue(":synopsis_fr", $synopsis, PDO::PARAM_STR);
    $stmt->bindValue(":miniature_article", $url_miniature, PDO::PARAM_STR);
    $stmt->execute();
}

function addProjet($nom_projet, $etudiants, $annee_projet, $niveau, $iframe_projet, $lien_projet, $image_projet, $description){
    $db=dbConnect();
    $target_file = 'src/img/proj/' . basename($_FILES['image']);
    $query="INSERT INTO projet (nom_projet, etudiants, annee_projet, niveau, iframe_projet, lien_projet, image_projet, description) VALUES (:nom_projet, :etudiants, :annee_projet, :niveau, :iframe_projet, :lien_projet, :image_projet, :description)";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":nom_projet", $nom_projet, PDO::PARAM_STR);
    $stmt->bindValue(":etudiants", $etudiants, PDO::PARAM_STR);
    $stmt->bindValue(":annee_projet", $annee_projet, PDO::PARAM_STR);
    $stmt->bindValue(":niveau", $niveau, PDO::PARAM_STR);
    $stmt->bindValue(":iframe_projet", $iframe_projet, PDO::PARAM_STR);
    $stmt->bindValue(":lien_projet", $lien_projet, PDO::PARAM_STR);
    $stmt->bindValue(":image_projet", $image_projet, PDO::PARAM_STR);
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

function logout(){
    session_destroy();
}

?>