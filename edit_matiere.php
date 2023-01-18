<?php include ('model.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php incude('head.php'); ?>
    <title>Modifications - Matière</title>
</head>
<?php 
$matiere = getMatiere($_GET['id']);
?>
<body>
<form action="script_edit_matiere.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2 class="mt-5 mb-2">Modifier une matière</h2>
    <label class="form-label" for="nom">Nom*</label>
    <input class="form-control" type="text" name="nom" id="" value="<?php echo(htmlspecialchars($matiere['nom_matiere'])); ?>">
    <label class="form-label" for="description">Description*</label>
    <textarea name="description" id="" cols="30" rows="10"><?php echo(htmlspecialchars($matiere['description'])); ?></textarea>
    <input type="checkbox" name="id" id="" value="<?php echo($_GET['id']) ?>" style="display: hidden;">
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
</div>
</form>
</body>
</html>