<?php include 'model.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<meta name="description" content="La formation MMI est conçue pour offrir une expertise globale dans les domaines du multimédia et de l'Internet. Du développement de sites internet à la production d'affiches en passant par des cours de marketing, cette formation vous donne toutes les compétences nécessaires pour réussir dans les métiers liés à internet avec le BUT MMI.">

<head>
    <?php include 'head.php'; ?>
    <title>Accueil - MMI Champs</title>
</head>


<body class="h-100">
    <?php include 'menu.php'; ?>
    <main class='mb-5 container h-100 '>
        <div class="container vh100">
            <div data-aos="fade-down" data-aos-offset="300" class="row h-100 justify-content-center align-items-center">

                <div class="col-12 col-lg-7">

                    <h1 class='display-2 inline text-center'>BUT MMI CHAMPS</h1>
                    <div class=" row col-12 justify-content-end">
                        <p class='col-10 col-lg-9 pe-4 text-end'> À la recherche d'une formation ? Un étudiant MMI d'un autre IUT ?
                            Un ancien élève ? Un parent ? Un enseignant ?
                            Peu importe votre statut, venez découvrir le BUT MMI à l'IUT de Champs-sur-Marne !
                            <a class="btn btn-primary mt-3" href="presentation">Suivre la visite guidée!</a>
                        </p>

                    </div>
                </div>

            </div>


        </div>

        </div>
        <div data-aos="fade-left" data-aos-offset="300" class="container mb-4">
            <div data-aos="fade-right" data-aos-offset="200" class="container d-flex flex-column align-items-center  justify-content-center mb-5 mt-5">
                <div class="row">
                    <div class="col-12 col-lg-7 d-flex flex-column justify-content-center">
                        <h3 class='display-6 '>La formation MMI</h3>
                        <p>La formation MMI couvre tous les champs du digital, offrant ainsi une expertise globale sur les métiers du multimédia et de l'Internet. Du développement de sites internet à la production d'affiches en passant par des cours de marketing afin savoir élaborer une stratégie de vente, le BUT MMI donne toutes les clés pour se lancer dans les métiers liés à internet.
                        </p>
                        <a href="/presentation" class="btn btn-primary w-25">En savoir plus</a>
                    </div>
                    <div class="col-12 col-lg-5">
                        <img class="img-fluid" src="src/img/illustration/accueil-formation.webp" alt="">
                    </div>
                </div>
            </div>






            <div data-aos="fade-left" data-aos-offset="200" class="container d-flex flex-column align-items-center  justify-content-center mb-5 mt-5">
                <div class="row ">
                    <div class="col-12 col-lg-5 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="src/img/illustration/accueil-stage-alternance.webp" alt="">
                    </div>
                    <div class="col-12 col-lg-7 d-flex flex-column justify-content-center">
                        <h3 class='display-6 '>Stage/Alternance</h3>
                        <p>MMI est une formation profesionalisante, c'est pourquoi l'étudiant est confronté au mond du travail dès la fin de la première année. Tout au long de la formation, le but est de confronté les étudiants au monde du travail le plus possible, que ce soit à travers les travaux ou à travers les stages et alternances qui permettent aux étudiants de faire leurs premiers pas dans les métiers du web. </p>
                        <a href="/stage-alternance" class="btn btn-primary w-25">En savoir plus</a>
                    </div>
                </div>

                <div data-aos="fade-right" data-aos-offset="200" class="container d-flex flex-column align-items-center  justify-content-center mb-5 mt-5">
                    <div class="row">
                        <div class="col-12 col-lg-7 d-flex flex-column justify-content-center">
                            <h3 class='display-6 '>Après MMI</h3>
                            <p>La formation peut mener à de nombreuses branches différentes, d'une part à une multitude de poursuites d'études, et d'une autre, MMI ouvre la porte à énormément de métiers en rapport avec le numérique. La formation MMI est recherché dans le monde du travail.
                            </p>
                            <a href="/debouches" class="btn btn-primary w-25">En savoir plus</a>
                        </div>
                        <div class="col-12 col-lg-5">
                            <img class="img-fluid" src="src/img/illustration/accueil-apres-mmi.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-offset="300" class="container d-flex flex-column  justify-content-center vh75 mb-4">
                <h3 class="mb-3 display-6">MMI en chiffres</h3>
                <div class="p-3 mb-2  rounded">
                    <div class="display-4 d-flex flex-column flex-lg-row  justify-content-lg-between">
                        <div class="d-flex flex-row flex-lg-column">
                            <p class='text-lg-center me-2 me-lg-0'> 28 </p>
                            <p class="display-6">ans d'existence</p>
                        </div>


                        <div class="d-flex flex-row flex-lg-column">

                            <p class='text-lg-center me-2 me-lg-0'> 1600 </p>
                            <p class="display-6">Diplômés</p>
                        </div>


                        <div class="d-flex flex-row flex-lg-column">
                            <p class='text-lg-center me-2 me-lg-0'> 2500 </p>
                            <p class="display-6">Candidats par an</p>
                        </div>
                        <div class="d-flex flex-row flex-lg-column">
                            <p class='text-lg-center me-2 me-lg-0'> 56 </p>
                            <p class="display-6">Places</p>
                        </div>

                    </div>
                </div>

            </div>
            <div data-aos="fade-right" data-aos-offset="300" class="container mb-4  ">
                <h3 class="mb-3 display-6">Projets étudiants :</h3>
                <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                    <?php
                    $result = getProjets();
                    for ($i = 0; $i < 3; $i++) {
                        $row = $result[$i];
                        echo "
                    <div class='col'>
                        <div class='card h-100'>
                            <img src='" . $row['img_projet'] . "' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h4 class='card-title'>" . $row['nom_projet'] . "</h4>
                            </div>
                        </div>
                    </div>";
                    }
                    ?>

                </div>


            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary me-md-2" href="/projets">Voir les projets</a>
            </div>

        </div>
        <div data-aos="fade-left" data-aos-offset="300" class="container vh100 d-flex flex-column  justify-content-center ">
            <h3 class="mb-3 display-6">Témoignages d'étudiants</h3>

            <div class="row row-cols-1 row-cols-md-3 g-5">

                <?php $result = getTemoignages();
                for ($i = 0; $i < 3; $i++) {
                    $row = $result[$i];
                    echo "<div class='col'>
                        <div class='card h-100'>
                            <div class='card-body'>

                                <blockquote class='blockquote mb-0'>
                                    <p>" . substr($row['contenu_temoignage'], 0, 150) . " ...</p>
                                    <footer class='blockquote-footer'>" . $row['etudiant'] . " <cite title='Source Title'>" . $row['promo'] . "</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    ";
                } ?>

            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <a class="btn btn-primary me-md-2" href="/temoignages">Voir les témoignages</a>
            </div>

        </div>
        <div data-aos="fade-right" data-aos-offset="300" class="container  flex-column  justify-content-center ">
            <h3 class="mb-3 display-6">Actualités MMI</h3>

            <?php $result = getArticles();
            for ($i = 0; $i < 3; $i++) {
                $row = $result[$i];
                echo "
            <div class='card mb-3'>
                <div class='card-header'>" .
                    $row['nom_article'] .
                    "</div>

                <div class='card-body'>
                    <blockquote class='blockquote mb-0'>
                        <p>" . $row['date_article'] . "</p>
                        <p>" . $row['contenu_article'] . "</p>
                        <footer class='blockquote-footer'>" . $row['auteur'] . "</footer>
                    </blockquote>
                </div>
            </div>";
            } ?>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <a class="btn btn-primary me-md-2" href="/actus">Voir les actualités</a>
            </div>
        </div>


    </main>
    <?php include 'footer.php' ?>
</body>

</html>