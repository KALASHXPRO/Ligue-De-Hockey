<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!ISSET($controleur)) header("Location: ..\\index.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Accueil</title>
</head>
<body>
    <header>
        <div class="Header-elements">
            <div class="site-logo"><img src="images/logo.png" width="160" height="120" alt="imagedulogo"></div>
            <div class="NomDuSite">
                <h1>Bienvenue à la ligue de hockey</h1>
                <?php if (!empty($_SESSION['utilisateurConnecte'])): ?>
                    <h5 style='color:white;text-align:center'>Bienvenue <?php echo htmlspecialchars($_SESSION['utilisateurConnecte']); ?></h5>
                <?php endif; ?>
            </div>
            <?php if (!empty($_SESSION['utilisateurConnecte'])): ?>
                <a href="?action=seDeconnecter" class="seconnecter">Se déconnecter</a>
            <?php else: ?>
                <a href="?action=seConnecter" class="seconnecter">Se connecter</a>
            <?php endif; ?>
        </div>
    </header>
    <nav id="menu-horizontal">
        <ul>
            <li><a href="?action=voirPageAccueil">Page d'accueil</a></li>
            <li><a href="?action=voirEquipesSenior">Les équipes majeures</a></li>
            <li><a href="?action=voirEquipesJunior">Les équipes juniors</a></li>
            <li><a href="?action=voirResultatsSenior">Les résultats majeurs</a></li>
            <li><a href="?action=voirResultatsJunior">Les résultats juniors</a></li>
            <li><a href="?action=voirCalendrierSenior">Le calendrier majeurs</a></li>
            <li><a href="?action=voirCalendrierJunior">Le calendrier juniors</a></li>
        </ul>
    </nav>
    <div class="corps">
        <main class="main-content">
            <div class="apropos"><h2>A propos</h2></div>
            <div class="texte">
                <p>Nous sommes ravis de vous accueillir dans notre communauté de passionnés de hockey.<br>
                Explorez notre site pour découvrir toutes les informations sur les équipes, les calendriers, les actualités et bien plus encore.</p>
            </div>
            <!-- Nouveau carousel moderne -->
            <div class="carousel-modern">
                <button class="carousel-arrow left" aria-label="Précédent">&#10094;</button>
                <div class="carousel-track">
                    <img src="https://frontofficesports.com/wp-content/uploads/2023/03/FOS-23-3.10-Ottawa-Senators.jpg" alt="Hockey 1" class="carousel-slide active">
                    <img src="https://www.palmbeachpost.com/gcdn/presto/2021/05/09/USAT/81cad4d8-5320-40de-a9b7-5e1949596d9f-USP_NHL__Tampa_Bay_Lightning_at_Florida_Panthers.jpg?crop=3781,2127,x0,y58&width=660&height=372&format=pjpg&auto=webp" alt="Hockey 2" class="carousel-slide">
                    <img src="https://cdn.nhlpa.com/img/assets/nhlpa.com/gallery/2956b311-0df7-4261-807f-51301739806a/CP-Subban.jpg" alt="Hockey 3" class="carousel-slide">
                    <img src="https://cdn.cheknews.ca/wp-content/uploads/2020/09/29072931/Stamkos-Cup-1024x682.jpg" alt="Hockey 4" class="carousel-slide">
                </div>
                <button class="carousel-arrow right" aria-label="Suivant">&#10095;</button>
                <div class="carousel-dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
        </main>
    </div>
    <footer>
        <div class="contact">
            <a href="mailto:2253910@crosemont.qc.ca">CONTACT</a>
        </div>
    </footer>
    <script src="js/carouselmodern.js"></script>
</body>
</html>