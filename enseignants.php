<?php include 'model.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Enseignants MMI</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <main class='mb-5 container h-100'>
        <nav aria-label="breadcrumb" class="mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">L'équipe enseignante</li>
            </ol>
        </nav>
        <div class="container vh100">
            <div data-aos="fade-down" data-aos-offset="500" class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-lg-7">

                    <h1 class='display-1 inline text-center'>Nos enseigants</h1>
                    <div class="w-100"></div>
                    <div class=" row col-12 justify-content-center">
                        <p class=' col-8 pe-3 text-center'> Vous voulez savoir avec qui vous allez passer votre formation ? Alors cette page est faite pour vous !</p>
                    </div>
                </div>
            </div>
        </div>



        <div data-aos="fade-right" data-aos-offset="500" class="container  justify-content-center align-items-center">
            <div class="row">
                <?php
                $result = getProfs();
                foreach ($result as $prof) { ?>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 mb-5">
                        <div class="card  h-100">
                            <div class="card-header">
                                <img src="src/img/prof/<?php echo $prof['url_photo']; ?>" alt="photo du professeur" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $prof['nom_prof']; ?></h4>
                                <p class="card-text"><?php echo $prof['nom_matiere']; ?></p>
                                <!-- Ajoutez un bouton pour ouvrir la modale -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-prof<?php echo $prof['id_prof']; ?>">
                                    Plus de détails
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>


                <!-- Ajoutez autant de cartes et modales que nécessaire en répétant le code ci-dessus -->
            </div>
        </div>

        <!-- Ajoutez un modale pour chaque professeur, en utilisant des ID uniques pour les associer aux boutons -->

        <?php
        $result = getProfs();
        foreach ($result as $resltat) {
        ?>
            <div class="modal fade" id="modal-prof<?php echo $resltat['id_prof']; ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title fs-5" id="staticBackdropLabel"><?php echo $resltat['nom_prof']; ?></h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="src/img/prof/<?php echo $resltat['url_photo']; ?>" alt="photo du professeur" class="img-fluid mb-3">
                            <p><strong></strong> </p>
                            <p><strong>Présentation matière :</strong> <?php if ($resltat['bio'] == null) {
                                                                            echo "le professeur n'a pas encore rempli sa bio";
                                                                        } else {
                                                                            echo $resltat['bio'];
                                                                        }
                                                                        ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>