<?php include ('model.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php incude('head.php'); ?>
    <title>Modifications - Prof</title>
</head>
<?php 
$prof = getProf($_GET['id']);
?>
<body>
<form action="script_edit_prof.php" method="post">
<div class="mb-3 container d-flex flex-column justify-content-center align-items-center w-25 mb-5 mt-5">
    <h2 class="mt-5 mb-2">Modifier un prof</h2>
    <label class="form-label" for="nom">Prénom et NOM*</label>
    <input class="form-control" required type="text" name="nom" value="<?php echo(htmlspecialchars($prof['nom_prof'])); ?>">
    <label class="form-label" for="bio">Bio</label>
    <textarea name="bio" id="" cols="30" rows="10"><?php echo(htmlspecialchars($prof['bio'])); ?></textarea>
    <fieldset>
        <legend>Matières enseignées</legend>
        <label class="form-label" for="matiere_1">Matière 1</label>
        <select name="matiere_1" id="">
            <option value="">---</option>

            <?php
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
            ?>
        </select><br>
    </fieldset>
    <fieldset>
        <legend>Permissions sur les sections du site</legend>
        <label class="form-check-label" for="permission_projets">Projets</label>
        <input class="form-check-input" type="checkbox" name="permission_projets" id="" value=1
        <?php if(isset($prof['p_projets'])){echo'checked';}?>>
        <label class="form-check-label" for="permission_articles">Articles</label>
        <input class="form-check-input" type="checkbox" name="permission_articles" id="" value=1
        <?php if(isset($prof['p_articles'])){echo'checked';}?>>
        <label class="form-check-label" for="permission_temoignages">Témoignages</label>
        <input class="form-check-input" type="checkbox" name="permission_temoignages" id="" value=1
        <?php if(isset($prof['p_temoignages'])){echo'checked';}?>>
    </fieldset>
    <input type="checkbox" name="id" id="" value="<?php echo($_GET['id']) ?>" style="display: hidden;">
    <input class="btn btn-primary my-4" type="submit" value="Envoyer">
    </div>
</form>
</body>
</html>