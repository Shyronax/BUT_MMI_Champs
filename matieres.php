<?php include './model.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Matières - MMI Champs</title>
</head>

<body>
    <?php include 'menu.php'; ?>

    <div class="container  mb-5 mt-2">
        <main class='d-flex flex-column justify-conte,t-center'>
            <nav aria-label="breadcrumb" class="mt-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Les matières en MMI</li>
                </ol>
            </nav>
            <header data-aos="fade-down" data-aos-offset="500" class='mb-5 d-flex flex-column align-items-center container d-flex flex-column align-items-center vh75 justify-content-center'>
                <h1 class='display-3 text-center '>Ce qu'on fait en MMI</h1>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-7 ">
                        <p class='text-center'>
                            C'est ici que vous découvrirez les matières que l'on enseigne en MMI
                        </p>
                    </div>
                </div>
            </header>


            <div data-aos="fade-right" data-aos-offset="500" class="container w-75 ">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php

                    $result = getMatieres();
                    foreach ($result as $matiere) { ?>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $matiere['nom_matiere']; ?></h5>
                                    <p class="card-text"><?php echo $matiere['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }

                    ?>

                </div>
            </div>
            <div class="nextLink d-flex justify-content-center m-5 p-5"><a href="enseignants">Voir l'équipe enseignante ></a></div>
        </main>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>