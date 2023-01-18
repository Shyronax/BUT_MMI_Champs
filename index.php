<?php include 'model.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Accueil - MMI Champs</title>
</head>


<body class="h-100">
    <?php include 'menu.php'; ?>
    <main class='mb-5 container h-100 '>
        <div class="container vh100">
            <div data-aos="fade-down" data-aos-offset="500" class="row h-100 justify-content-center align-items-center">

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
        <div class="container vh75 p-0 mb-5 position-relative">


            <div data-aos="fade-right" data-aos-offset="500" class="row ps-3">
                <div class="col-12 col-lg-6"><img class="img-fluid h-100 w-100" src="src/img/accueil/iut-mmi.png" alt=""></div>
                <div class="col">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p class=''>Situé à 15 minutes à pied du rer A</p>
                    </div>
                </div>
            </div>



        </div>
        </div>
        <div data-aos="fade-left" data-aos-offset="500" class="container vh75 mb-4">
            <h2 class="mb-3 display-5">MMI en bref :</h2>
            <div class="row row-cols-1 row-cols-md-3 ">
                <div class="col ">
                    <div class="card h-100">
                        <div class="card-body ">
                            <h3 class="card-title display-6">Formation en 3 ans</h3>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary w-50">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title display-6">Formation pluridisciplinaire</h3>
                            <p class="card-text">La formation MMI couvre tous les champs du digital, offrant ainsi une expertise globale sur les métiers du multimédia et de l'Internet...</p>
                            <a href="#" class="btn btn-primary w-50">En savoir plus</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body ">
                            <h3 class="card-title display-6">Stage/Alternance</h3>
                            <p class="card-text">MMI est une formation profesionalisante, c'est pourquoi l'étudiant est confronté au mond du travail dès la fin de la première année...</p>
                            <a href="#" class="btn btn-primary w-50">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-aos="fade-right" data-aos-offset="500" class="container flex-column  justify-content-center vh75 mb-4">
            <h3 class="mb-3">Où sommes-nous?</h3>
            <div class="overflow-hidden">

                <iframe class="rounded" src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d955.6743561309602!2d2.5839759004617586!3d48.837146438660476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7e5ced48ab7fc8df!2sIUT%20de%20Marne-la-Vall%C3%A9e%20-%20Universit%C3%A9%20Gustave%20Eiffel!5e0!3m2!1sfr!2sca!4v1673112834622!5m2!1sfr!2sca" width="1500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
        <div data-aos="fade-left" data-aos-offset="500" class="container d-flex flex-column  justify-content-center vh75 mb-4">
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
        <div data-aos="fade-right" data-aos-offset="500" class="container mb-4  ">
            <h3 class="mb-3 display-6">Projets étudiants :</h3>
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
                <?php
                $result = getProjets();
                for ($i = 0; $i < 3; $i++) {
                    $row = $result[$i];
                    echo "<div class='col'>
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
            <button class="btn btn-primary me-md-2" type="button">Button</button>
        </div>

        </div>
        <div data-aos="fade-left" data-aos-offset="500" class="container vh100 d-flex flex-column  justify-content-center ">
            <h3 class="mb-3 display-6">Témoignages d'étudiants</h3>

            <div class="row row-cols-1 row-cols-md-3 g-5">

                <?php $result = getTemoignages();
                for ($i = 0; $i < 3; $i++) {
                    $row = $result[$i];
                    echo "<div class='col'>
                        <div class='card h-100'>
                            <div class='card-body'>
                                <h4 class='card-title'>Témoignage</h4>
                                <blockquote class='blockquote mb-0'>
                                    <p>" . $row['contenu_temoignage'] . "</p>
                                    <footer class='blockquote-footer'>" . $row['etudiant'] . " <cite title='Source Title'>" . $row['promo'] . "</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    ";
                } ?>

            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                <button class="btn btn-primary me-md-2" type="button">Button</button>
            </div>

        </div>
        <div data-aos="fade-right" data-aos-offset="500" class="container  flex-column  justify-content-center ">
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
                <button class="btn btn-primary me-md-2" type="button">Button</button>
            </div>
        </div>


    </main>
    <?php include 'footer.php' ?>
</body>

</html>