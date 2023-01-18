<?php include 'model.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Actualités - MMI Champs</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container mb-5 mt-2">
        <main class='d-flex flex-column justify-conte,t-center'>
            <nav aria-label="breadcrumb" class="mt-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actualités</li>
                </ol>
            </nav>
            <header data-aos="fade-down" data-aos-offset="300" class='mb-5 d-flex flex-column align-items-center justify-content-center container vh75'>
                <h1 class='display-3 text-center'>Flash' info!</h1>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-7 ">
                        <p class='text-center'>
                            C'est ici que vous retrouvez toutes les actualités de notre IUT de Champs.
                        </p>
                    </div>
                </div>
            </header>
            <?php
            $result = getArticles();
            foreach ($result as $actu) { ?>
                <div data-aos="fade-right" data-aos-offset="300" class="container mb-5">
                    <div class="card mb-2">
                        <div class="card-header">
                            <?php echo $actu['nom_article']; ?>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p><?php echo $actu['date_article']; ?></p>
                                <p><?php echo $actu['contenu_article']; ?></p>
                                <footer class="blockquote-footer"><cite title="Source Title"><?php echo $actu['auteur']; ?></cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
    </div>
    </div>
    <div class="nextLink d-flex justify-content-center m-5 p-5"><a href="international">Voir les partenariats possibles ></a></div>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>