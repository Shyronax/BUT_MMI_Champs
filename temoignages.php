<?php include './model.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Témoignages - MMI Champs</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <main class='d-flex flex-column justify-content-center mb-5'>
            <nav aria-label="breadcrumb" class="mt-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Les témoignages</li>
                </ol>
            </nav>
            <header data-aos="fade-down" data-aos-offset="500" class='mb-5 d-flex flex-column align-items-center container d-flex flex-column align-items-center vh75 justify-content-center'>
                <h1 class='display-3 text-center mt-2'>Nos étudiants témoignent</h1>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-7 ">
                        <p class='text-center'>
                            Si vous voulez avoir des avis d'expérience sur la formation MMI à Champs-sur-Marne, c'est ici ! Découvrez les témoignages de nos anciens étudiants.
                        </p>
                    </div>
                </div>
            </header>

            <?php
            $x = 0;

            $result = getTemoignages();
            foreach ($result as $temoignage) {
                $x = $x % 2;
                if ($x == 1) { ?>
                    <div data-aos="fade-left" data-aos-offset="200" class="container d-flex flex-column align-items-center  justify-content-center mb-5">
                        <div class="row gap-5">
                            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center bg-body-secondary p-5 rounded-5">
                                <p><?php echo $temoignage['contenu_temoignage']; ?>
                                </p>
                                <p><b><?php echo $temoignage['etudiant']; ?>, PROMO <?php echo $temoignage['promo']; ?></b></p>
                            </div>
                            <div class="col-12 col-lg-2">
                                <img class="img-fluid photoTemoignage" src="src/img/temoignage/profil<?php echo $temoignage['id_temoignage']; ?>.png" alt="">
                            </div>
                        </div>
                    </div>
                <?php
                }
                if ($x == 0) { ?>
                    <div data-aos="fade-right" data-aos-offset="200" class="container d-flex flex-column align-items-center  justify-content-center mb-5">
                        <div class="row gap-5">
                            <div class="col-12 col-lg-2 d-flex flex-column justify-content-center">
                                <img class="img-fluid photoTemoignage" src="src/img/temoignage/profil<?php echo $temoignage['id_temoignage']; ?>.png" alt="">
                            </div>
                            <div class="col-12 col-lg-9 d-flex flex-column justify-content-center bg-body-secondary p-5 rounded-5">
                                <p><?php echo $temoignage['contenu_temoignage']; ?>
                                </p>
                                <p><b><?php echo $temoignage['etudiant']; ?>, PROMO <?php echo $temoignage['promo']; ?></b></p>
                            </div>
                        </div>
                    </div>
            <?php
                }

                $x++;
            }
            ?>
            <div class="nextLink d-flex justify-content-center m-5 p-5"><a href="actus">Voir l'actualité ></a></div>
        </main>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>