<?php include ('model.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php incude('head.php'); ?>
    <title>Modifications - Témoignage</title>
</head>
<?php 
$temoignage = getTemoignage($_GET['id']);
?>
<body>
<form action="script_edit_temoignage.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2 class="mt-5 mb-2">Modifier un témoignage</h2>
    <label class="form-label" for="titre">Titre*</label>
    <input class="form-control" type="text" name="titre" id="" value="<?php echo(htmlspecialchars($temoignage['nom_temoignage'])); ?>">
    <label class="form-label" for="contenu">Contenu du témoignage*</label>
    <textarea name="contenu" id="" cols="30" rows="10"><?php echo(htmlspecialchars($temoignage['contenu_temoignage'])); ?></textarea>
    <label class="form-label" for="etudiant">Étudiant*</label>
    <input class="form-control" type="text" name="etudiant" id="" value="<?php echo(htmlspecialchars($temoignage['etudiant'])); ?>">
    <label class="form-label" for="promo">Promotion de l\'étudiant*</label>
    <input class="form-control" type="text" name="promo" id="" value="<?php echo(htmlspecialchars($temoignage['promo'])); ?>">
    <input type="checkbox" name="id" id="" value="<?php echo($_GET['id']) ?>" style="display: hidden;">
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
</div>
</form>
</body>
</html>