<?php include ('model.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('head.php'); ?>
    <title>Modifications - Article</title>
</head>
<?php 
$article = getArticle($_GET['id']);
?>
<body>
<form action="script_edit_article.php" method="post" enctype="multipart/form-data">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2 class="mt-5 mb-2">Modifier un article</h2>
    <label class="form-label" for="titre">Titre*</label>
    <input class="form-control" required type="text" name="titre" id="" value="<?php echo(($article['nom_article'])); ?>">
    <label class="form-label" for="contenu">Contenu*</label>
    <textarea required name="contenu" id="" cols="30" rows="10"><?php echo(($article['contenu_article'])); ?></textarea>
    <input type="text" name="id" id="" value="<?php echo($_GET['id']) ?>" style="display: none;">
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
</div>
</form>
</body>
</html>