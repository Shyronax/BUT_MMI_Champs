<nav class=" navbar navbar-expand-lg sticky-top px-4">

    <a class="navbar-brand amsterdam" href="index.php">
        <img src="logo/logo-but-mmi-champs.png" alt="Logo" height="45" class="d-inline-block align-text-top logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class=" collapse navbar-collapse
        collapse navbar-collapse text-right justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav domine ml-auto text-end me-3">


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    MMI c'est quoi?
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="presentation.php">La formation MMI</a></li>
                    <li><a class="dropdown-item" href="matieres.php">Les matières enseignées</a></li>
                    <li><a class="dropdown-item" href="enseignants.php">L'équipe enseignante</a></li>
                    <li><a class="dropdown-item" href="debouches.php">Après MMI</a></li>
                    <li><a class="dropdown-item" href="stage-alternance.php">Stages & Alternance</a></li>
                    <li><a class="dropdown-item" href="international.php">À l'nternational</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    MMI c'est qui?
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="projets.php">Projets</a></li>
                    <li><a class="dropdown-item" href="temoignages.php">Témoignages</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="actu.php">Actualités</a>
            </li>
            <li>
                <label class="switch">
                    <input type="checkbox" id='switch-theme'>
                    <i class="bi bi-brightness-high-fill checkbox-image "></i>
                    <i class="bi bi-moon-stars-fill checkbox-image checked"></i>
                    <span class="slider round"></span>
                </label>
            </li>
        </ul>
        </li>

        </ul>
    </div>
</nav>
<script>
    let switchTheme = document.getElementById('switch-theme');
    let logos = document.querySelectorAll(".logo");

    let theme = localStorage.getItem("theme");
    if (theme === "dark") {
        switchTheme.checked = true;
        document.documentElement.setAttribute('data-bs-theme', 'dark');
        logos.forEach(logo => logo.setAttribute("src", "logo/logo-but-mmi-champs-white.png"));
    } else {
        switchTheme.checked = false;
        document.documentElement.setAttribute('data-bs-theme', 'light');
        logos.forEach(logo => logo.setAttribute("src", "logo/logo-but-mmi-champs.png"));
    }

    switchTheme.addEventListener('change', function() {
        if (this.checked) {
            document.documentElement.setAttribute('data-bs-theme', 'dark');
            logos.forEach(logo => logo.setAttribute("src", "logo/logo-but-mmi-champs-white.png"));
            document.body.classList.remove("fadin");
            document.body.classList.toggle("fadin");
            localStorage.setItem("theme", "dark");
        } else {
            document.documentElement.setAttribute('data-bs-theme', 'light');
            logos.forEach(logo => logo.setAttribute("src", "logo/logo-but-mmi-champs.png"));
            document.body.classList.remove("fadin");
            document.body.classList.toggle("fadin");
            localStorage.setItem("theme", "light");
        }
    });
</script>