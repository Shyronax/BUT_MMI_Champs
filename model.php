<?php

function dbConnect(){
    $db=new PDO('mysql:host=localhost;dbname=mmichamps;port=3306', 'root', '');
    return $db;
}

function addUser($name, $login, $pass, $mail, $url_photo, $cfr, $cen, $bfr, $ben, $art, $proj, $tem, $adm){
    $hash=password_hash($pass, PASSWORD_DEFAULT);
    $db=dbConnect();
    $query="INSERT INTO utilisateur (nom_prof, login_prof, mdp, mail, url_photo, bio_fr, bio_en, p_articles, p_projets, p_temoignages, p_admin) VALUES (:nom_prof, :login_prof, :mdp, :mail, :url_photo, :bio_fr, :bio_en, :p_articles, :p_projets, :p_temoignages, :p_admin)";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":nom_prof", $name, PDO::PARAM_STR);
    $stmt->bindValue(":login_prof", $login, PDO::PARAM_STR);
    $stmt->bindValue(":mdp", $hash, PDO::PARAM_STR);
    $stmt->bindValue(":mail", $mail, PDO::PARAM_STR);
    $stmt->bindValue(":url_photo", $url_photo, PDO::PARAM_STR);
    $stmt->bindValue(":bio_fr", $bfr, PDO::PARAM_STR);
    $stmt->bindValue(":bio_en", $ben, PDO::PARAM_STR);
    $stmt->bindValue(":p_articles", $art, PDO::PARAM_INT);
    $stmt->bindValue(":p_projets", $proj, PDO::PARAM_INT);
    $stmt->bindValue(":p_temoignages", $tem, PDO::PARAM_INT);
    $stmt->bindValue(":p_admin", $adm, PDO::PARAM_INT);
    $stmt->execute();
}

function login($login, $pass){
    $db=dbConnect();
    $query="SELECT * FROM user WHERE user_login = :user_login";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":user_login", $login, PDO::PARAM_STR);
    $result=$stmt->execute();
    if ($result=$stmt->fetch(PDO::FETCH_ASSOC)){
        if(password_verify($pass, $result['user_pass'])){
            $_SESSION['name']=$result['username'];
            $_SESSION['id']=$result['user_id'];
            $_SESSION['admin']=$result['is_admin'];
            return true;
        } else {return false;}   
    } else {return false;} 
}

function addArticle($nom_fr, $contenu_fr, $nom_en, $contenu_en, $synopsis_fr, $synopsis_en, $url_miniature){
    $db=dbConnect();
    $query="INSERT INTO article (nom_article_fr, contenu_article_fr, nom_article_en, contenu_article_en, synopsis_en, date_article, synopsis_fr, miniature_article, auteur) VALUES (:nom_article_fr, :contenu_article_fr, :nom_article_en, :contenu_article_en, :synopsis_en, NOW(), :synopsis_fr, :miniature_article, $_SESSION['name'])";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":nom_article_fr", $nom_fr, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_article_fr", $contenu_fr, PDO::PARAM_STR);
    $stmt->bindValue(":nom_article_en", $nom_en, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_article_en", $contenu_en, PDO::PARAM_STR);
    $stmt->bindValue(":synopsis_en", $synopsis_en, PDO::PARAM_STR);
    $stmt->bindValue(":synopsis_fr", $synopsis_fr, PDO::PARAM_STR);
    $stmt->bindValue(":miniature_article", $url_miniature, PDO::PARAM_STR);
    $stmt->execute();
}

function addProjet($nom_projet, $etudiants, $annee_projet, $niveau, $miniature_projet, $iframe_projet, $lien_projet, $image_projet, $description_fr, $description_en){
    $db=dbConnect();
    $query="INSERT INTO projet (nom_projet, etudiants, annee_projet, niveau, iframe_projet, date_article, miniature_projet, iframe_projet, lien_projet, image_projet, description_fr, description_en) VALUES (:nom_projet, :etudiants, :annee_projet, :niveau, :iframe_projet, :lien_projet, :miniature_projet, :miniature_article, :image_projet, :description_fr, :description_en)";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":nom_projet", $nom_projet, PDO::PARAM_STR);
    $stmt->bindValue(":etudiants", $contenu_fr, PDO::PARAM_STR);
    $stmt->bindValue(":annee_projet", $nom_en, PDO::PARAM_STR);
    $stmt->bindValue(":niveau", $contenu_en, PDO::PARAM_STR);
    $stmt->bindValue(":iframe_projet", $iframe_projet, PDO::PARAM_STR);
    $stmt->bindValue(":miniature_projet", $miniature_projet, PDO::PARAM_STR);
    $stmt->bindValue(":lien_projet", $lien_projet, PDO::PARAM_STR);
    $stmt->bindValue(":image_projet", $image_projet, PDO::PARAM_STR);
    $stmt->bindValue(":description_fr", $description_fr, PDO::PARAM_STR);
    $stmt->bindValue(":description_en", $description_en, PDO::PARAM_STR);
    $stmt->execute();
}

function addTemoignage($etudiant, $promo, $titre, $contenu_temoignage_fr, $contenu_temoignage_en){
    $db=dbConnect();
    $query="INSERT INTO temoignage (etudiant, promo, titre, contenu_temoignage_fr, contenu_temoignage_en) VALUES (:etudiant, :promo, :titre, :contenu_temoignage_fr, :contenu_temoignage_en)";
    $stmt=$db->prepare($query);
    $stmt->bindValue(":etudiant", $etudiant, PDO::PARAM_STR);
    $stmt->bindValue(":promo", $promo, PDO::PARAM_STR);
    $stmt->bindValue(":titre", $titre, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_temoignage_fr", $contenu_temoignage_fr, PDO::PARAM_STR);
    $stmt->bindValue(":contenu_temoignage_en", $contenu_temoignage_en, PDO::PARAM_STR);
    $stmt->execute();
}

function logout(){
    session_destroy();
}

?>