<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Flash' info</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container mb-5 mt-2">
        <main class='d-flex flex-column justify-conte,t-center'>
            <nav aria-label="breadcrumb" class="mt-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Actualités</li>
                </ol>
            </nav>
            <header data-aos="fade-down" data-aos-offset="300" class='mb-5 d-flex flex-column align-items-center justify-content-center container vh100'>
                <h1 class='display-3 text-center '>Flash' info!</h1>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-7 ">
                        <p class='align-left'>
                            C'est ici que vous retrouvez toutes les actualités de notre IUT de Champs.
                        </p>
                    </div>
                </div>
            </header>
            <div data-aos="fade-right" data-aos-offset="300" class="container mb-5">
                <div class="card mb-2">
                    <div class="card-header">
                        Title
                    </div>

                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>15/15/15</p>
                            <p>A well-known quote, contained in a blockquote element.</p>
                            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        Title
                    </div>

                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>24/11/2022</p>
                        <p>Les MMI2 sont à Londres ! Ce voyage a été organiser dans un but pédagogique. </p>
                            <footer class="blockquote-footer">l'équipe MMI <cite title="Source Title">dans actualité</cite></footer>
                        </blockquote>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        Title
                    </div>

                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>07/09/22</p>
                        <p>Les MMI2 prépare l'accueil des nouveau MMI1 !
                        </p>
                            <footer class="blockquote-footer">l'équipe MMI2 dans <cite title="Source Title">Actualité</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
    </div>
    </main>
    <?php include 'footer.php' ?>
</body>

</html>
