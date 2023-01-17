<footer class="py-5">
    <div class="container d-flex justify-content-between">
        <div class="w-25">
            <!-- Logo -->
            <img src="logo/logo-but-mmi-champs.png" class="img-fluid logo" alt="">
        </div>
        <div class='d-flex'>
            <!-- Colonne "A propos" -->
            <div class="col">
                <h3>A propos</h3>
                <p>Brève description de votre entreprise</p>
            </div>
            <!-- Colonne "Besoin d'aide" -->
            <div class="col">
                <h3>Besoin d'aide</h3>
                <ul>
                    <li><a href="#">Aide en ligne</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </div>
            <!-- Colonne "Contact" -->
            <div class="col">
                <h3>Contact</h3>
                <p>Adresse : 2 Rue Albert Einstein, 77420 Champs-sur-Marne</p>
                <p>E-mail : mmi-dir.iut@univ-eiffel.fr</p>
                <p>Téléphone : 01 60 95 85 85</p>
            </div>
        </div>
    </div>
</footer>
<script>
    AOS.init();
</script>
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