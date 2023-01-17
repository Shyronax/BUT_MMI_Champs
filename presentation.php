<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'head.php'; ?>
    <title>Présentation BUT MMI</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <main class='d-flex flex-column justify-conte,t-center'>
        <nav aria-label="breadcrumb" class="mt-5">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Présentation MMI</li>
            </ol>
        </nav>
            <header data-aos="fade-down" data-aos-offset="500" class='mb-5 d-flex flex-column align-items-center  justify-content-center container vh100'>
                <h1 class='display-3 text-center '>MMI, c'est quoi?</h1>
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-lg-7 ">
                        <p class='text-center'>
                            Que signifie le sigle MMI ? Qu'est-ce qu'on apprend dans cette formation ? Que peut-on faire après ? Et qu'en est-il des stages et alternances ?
                        </p>
                    </div>
                </div>
            </header>
            <div data-aos="fade-right" data-aos-offset="200" class="container d-flex flex-column align-items-center vh75 justify-content-center mb-5">
                <div class="row">
                    <div class="col-12 col-lg-7  d-flex flex-column justify-content-center">
                        <h2 class='display-6 '>La formation MMI</h2>
                        <p>Le BUT <b>M</b>étiers du <b>M</b>ultimédia et de l'<b>I</b>nternet (MMI) s'appuie sur un Programme Pédagogique National qui  garantit un diplôme de valeur nationale et une reconnaissance par les écoles et par les professionnels.
                        Cette formation vous permet d'acquérir un bagage suffisant pour <b>entrer dans le monde professionnel</b> ou <b>poursuivre vos études en master</b>.
                        </p>
                        <p>
                        Le BUT MMI est une formation répondant à l'évolution des usages du numérique omniprésente dans le quotidien. 
                        Au cours de sa formation, l'étudiant développe des <b>compétences pluridisciplinaires</b> tant dans le domaine de la programmation que dans le graphisme ou les réseaux. Son atout principal à la fin de la formation est sa polyvalence dans les domaines de la <b>conception</b>, de la <b>réalisation</b>, de la <b>commercialisation de produits et de services web et multimédia</b>.
                        Le BUT MMI compte 2600 heures d'enseignement sur trois ans (soit environ 33h d'enseignement par semaine) partagées entre la communication, les langues, l'informatique, la culture graphique, la culture scientifique et les réseaux.
                        </p>
                    </div>
                    <div class="col-12 col-lg-5">
                        <img class="img-fluid" src="src/img/illustration/mmi-formation.webp" alt="">
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" data-aos-offset="200" class="container d-flex flex-column align-items-center vh75 justify-content-center mb-5">
                <div class="row ">
                    <div class="col-12 col-lg-5 d-flex flex-column justify-content-center">
                        <img class="img-fluid" src="src/img/illustration/mmi-ce-qu-on-apprend.webp" alt="">
                    </div>
                    <div class="col-12 col-lg-7 d-flex flex-column justify-content-center">
                        <h2 class='display-6 '>Ce qu'on apprend</h2>
                        <p>Les compétences acquises lors de ces trois années de formation tournent autour de <b>trois parcours</b> :</p>
                            <ul>
                                <li><b>Développement web et dispositifs interactifs</b> : développement Web, base de données, services sur réseau et gestion de contenu.</li>
                                <li><b>Création numérique</b> : savoir générer du contenu multimédia (son, vidéo, photo, montage et animation 2D/3D) et utilisation des logiciels de la suite adobe ( illustrator, premiere pro, indesign…).</li>
                                <li><b>Stratégie de communication numérique et design d'expérience</b> : expression et communication, théorie de la communication</li>
                            </ul>
                            <br>
                            <a href="matieres.php" class="btn btn-primary w-25">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div data-aos="fade-right" data-aos-offset="200" class="container d-flex flex-column align-items-center vh75 justify-content-center mb-5">
                <div class="row">
                    <div class="col-12 col-lg-7  d-flex flex-column justify-content-center">
                        <h2 class='display-6 '>Après MMI, que faire ?</h2>
                        <p>Après le  BUT MMI, il est possible de poursuivre ses études dans les domaines suivants, par exemple :
                            programmation d'applications Web mobiles, e-commerce, la communication, l'évènementiel, l'audiovisuel ou encore l'infographie selon votre projet. La poursuite d'étude peut s'effectuer dans des écoles d'ingénieur comme l'ENSSAT Lannion parcours IMR, l'IFSIC ou l'IMAC.
                        </p>
                        <p>
                        Il est également possible après avoir obtenu son diplôme de rentrer directement dans le monde professionnel en devenant développeur web ou graphiste. Le BUT MMI vous ouvre une porte vers de nombreux métiers, c'est ce qui fait sa richesse.
                        </p>
                        <br>
                        <a href="debouches.php" class="btn btn-primary w-25">En savoir plus</a>
                    </div>
                    <div class="col-12 col-lg-5">
                        <img class="img-fluid" src="src/img/illustration/mmi-apres.webp" alt="">
                    </div>
                </div>
            </div>
            <a href="matieres.php" class="nextLink mb-5">Voir les matières enseignées en MMI</a>
        </main>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>