<?php include ('model.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('head.php'); ?>
    <title>Modifications - Projet</title>
</head>
<?php 
$projet = getProjet($_GET['id']);
?>
<body>
<form action="script_edit_projet.php" method="post" enctype="multipart/form-data">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2 class="mt-5 mb-2">Modifier un projet</h2>
    <label class="form-label" for="nom">Nom*</label>
    <input class="form-control" type="text" name="nom" id="" value="<?php echo(htmlspecialchars($projet['nom_projet'])); ?>">
    <label class="form-label" for="niveau">Niveau*</label>
    <select name="niveau" id="">
        <option value="BUT 1">BUT 1</option>
        <option value="BUT 2">BUT 2</option>
        <option value="BUT 3">BUT 3</option>
    </select>
    <label class="form-label" for="etudiants">Étudiants*</label>
    <input class="form-control" type="text" name="etudiants" id="" value="<?php echo(htmlspecialchars($projet['etudiants'])); ?>">
    <label class="form-label" for="description">Description*</label>
    <textarea name="description" id="" cols="30" rows="10"><?php echo(htmlspecialchars($projet['description'])); ?></textarea>
    <label class="form-label" for="lien">Lien</label>
    <input class="form-control" type="url" name="lien" id="" value="<?php echo($projet['lien']); ?>">
    <input type="number" name="id" id="" value=<?php echo($_GET['id']) ?> style="display: none;">
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
    </div>
</form>
</body>
</html>