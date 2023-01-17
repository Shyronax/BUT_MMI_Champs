<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Projets des étudiants</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <main class='mb-5 container h-100'>
    <nav aria-label="breadcrumb" class="mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Les projets MMI</li>
            </ol>
        </nav>
        <div class="container vh100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-8">

                    <h1 class='display-1 inline text-center'>Projets des étudiants</h1>
                    <div class="w-100"></div>
                    <div class=" row col-12 justify-content-end">
                        <p class=' col-8 pe-0 text-end'> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium molestias ipsa architecto officia earum? Quasi maiores consequuntur debitis eligendi neque provident accusantium assumenda, nihil, adipisci incidunt vitae, exercitationem officiis sequi?</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex flex-column justify-content-center align-items-center">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist w-100">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active btn-primary" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Tous</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Année 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Année 2</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="row row-cols-1 row-cols-md-3 ">
                        <div class="card me-3 mt-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card me-3 mt-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card me-3 mt-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                        <div class="card me-3 mt-3" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
            </div>
        </div>
    </main>