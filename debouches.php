<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <?php include 'head.php'; ?>
    <title>Débouchés post-MMI - MMI Champs</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <main class='d-flex flex-column justify-content-center mb-5'>
        <nav aria-label="breadcrumb" class="mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Les débouchés Post-MMI</li>
            </ol>
        </nav>
            <header class='mb-5 d-flex flex-column align-items-center  justify-content-center container vh75'>
                <h1 class='display-3 text-center '>Débouchés Post-MMI</h1>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-7 ">
                        <p class='text-center'>
                            Que signifie le sigle MMI ? Qu'est-ce qu'on apprend dans cette formation ? Que peut-on faire après ? Et qu'en est-il des stages et alternances ?
                        </p>
                    </div>
                </div>
            </header>
        <div class="container w-75">
            <div class="row">
                <div class="container d-flex justify-content-center my-5 col-lg-10">
                    <div class="row gap-5 d-flex justify-content-center">
                        <div class="door door2 d-flex align-items-center justify-content-center col-lg-3">
                            <h2 class="text-center doorTitle" id="opendoor1">Développeur Web</h2>
                        </div>
                        <div class="door door1 d-flex align-items-center justify-content-center col-lg-3">
                            <h2 class="text-center doorTitle" id="opendoor2">Intégrateur Web</h2>
                        </div>
                        <div class="door door2 d-flex align-items-center justify-content-center col-lg-3">
                            <h2 class="text-center doorTitle" id="opendoor3">Designer Web</h2>
                        </div>
                    </div>
                </div>
                <div class="container d-flex justify-content-center my-5 col-lg-10">
                    <div class="row gap-5 d-flex justify-content-center">
                    <div class="door door1 d-flex align-items-center justify-content-center col-lg-3">
                            <h2 class="text-center doorTitle" id="opendoor10">Gestionnaire de Réseaux</h2>
                        </div>
                        <div class="door door2 d-flex align-items-center justify-content-center col-lg-3">
                            <h2 class="text-center doorTitle" id="opendoor8">Chargé de Com'</h2>
                        </div>
                        <div class="door door1 d-flex align-items-center justify-content-center col-lg-3">
                            <h2 class="text-center doorTitle" id="opendoor5">UX Designer</h2>
                        </div>
                        
                    </div>
                </div>
                <div class="container d-flex justify-content-center my-5 col-lg-10">
                    <div class="row gap-5 d-flex justify-content-center">
                        <div class="door door2 d-flex align-items-center justify-content-center col-lg-3">
                            <h2 class="text-center doorTitle" id="opendoor9">SEO - SEM</h2>
                        </div>
                        <div class="door door1 d-flex align-items-center justify-content-center col-lg-3">
                                <h2 class="text-center doorTitle" id="opendoor4">Webmaster</h2>
                            </div>
                            <div class="door door2 d-flex align-items-center justify-content-center col-lg-3">
                                <h2 class="text-center doorTitle" id="opendoor11">Assistant Chef de projet</h2>
                            </div>
                    </div>
                </div>
                <div class="container d-flex justify-content-center my-5 col-lg-10">
                    <div class="row gap-5 d-flex justify-content-center">
                    <div class="door door1 d-flex align-items-center justify-content-center col-lg-3">
                                <h2 class="text-center doorTitle" id="opendoor12">Veilleur Stratégique</h2>
                    </div>
                    <div class="door door2 d-flex align-items-center justify-content-center col-lg-3">
                            <h2 class="text-center doorTitle" id="opendoor6">Graphiste</h2>
                        </div>
                            <div class="door door1 d-flex align-items-center justify-content-center col-lg-3">
                                <h2 class="text-center doorTitle" id="opendoor13">Réalisateur Multimédia</h2>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>

    <!-- les fenêtres modales -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <?php include 'footer.php' ?>
</body>

</html>
