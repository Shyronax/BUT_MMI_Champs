<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Stages & Alternances - MMI Champs</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container w-75">
    <nav aria-label="breadcrumb" class="mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Stages & alternances</li>
            </ol>
        </nav>
    <header class='mb-5 mt-3 d-flex flex-column align-items-center container'>
                <h1 class='display-3 text-center'>Stages & Alternances</h1>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-7 ">
                        <p class='text-center'>
                            Ici retrouvez les informations sur les stages et alternance qui pourraient vous attendre si vous rejoindrez l'aventure MMI !
                        </p>
                    </div>
                </div>
            </header>
        <main class='d-flex flex-column justify-content-center'>
            <ul id='timeline'>
            <li class='work'>
                <input class='radio' id='work5' name='works' type='radio' checked>
                <div class="relative">
                <label for='work5'>MMI1 : Stage de 2 semaines minimum</label>
                <span class='circle'></span>
                </div>
                <div class='content'>
                <p class='date'>À partir de juin-juillet</p>
                <p>
                    Durant la première année de la formation, vous serez amené à faire 2 semaines de stage minimum dans une entreprise. Le stage ne doit pas obligatoirement est dans le domaine du multimédia. Le but de ce stage est de découvrir le monde du travail et d'acquérir de l'expérience. 
                    Mais stage, dis aussi rapport de stage, alors préparez-vous ! 
                </p>
                </div>
            </li>
            <li class='work'>
                <input class='radio' id='work3' name='works' type='radio'>
                <div class="relative">
                <label for='work3'>MMI2 : Stage de 10 semaines minimum</label>
                
                <span class='circle'></span>
                </div>
                <div class='content'>
                <p class='date'>Entre avril et juin</p>
                <p>
                    Durant la deuxième année de la formation, vous devrez réaliser un stage de 10 semaines minimum, soit 2 mois et 2 semaines. Ce second stge doit obligatoirement être dans le domaine du multimédia et rémunéré.
                </p>
                </div>
            </li>
            <li class='work'>
                <input class='radio' id='work1' name='works' type='radio'>
                <div class="relative">
                <label for='work1'>MMI3 : Alternance</label>
                
                <span class='circle'></span>
                </div>
                <div class='content'>
                <p class='date'>À partir de septembre</p>
                <p>
                    Etant donné que c'est la première fois qu'il existe uen troisième année en MMI, les modalités de l'alternance en MMI sont toutes nouvelles aussi ! Alors dès que nous aurons davantage d'informations sur le sujet, nous vous les transmettrons.
                </p>
                </div>
            </li>
            </ul>
        </main>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>