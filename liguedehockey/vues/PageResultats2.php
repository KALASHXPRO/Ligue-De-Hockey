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
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Les résultats juniors</title>
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
            <div class="apropos"><h2>Les résultats juniors</h2></div>
            <div class="texte"><p>Consultez ici les résultats des matchs juniors.</p></div>
            <?php if (!empty($_SESSION['is_admin'])): ?>
                <a href="?action=ajouterResultatJunior" class="btn-add">Ajouter un résultat junior</a>
            <?php endif; ?>
            <div class="ResultatsTableaux">
                <?php
                include_once "/vues/inclusions/fonctions.inc.php";
                afficherTableResultatsJunior($controleur->getTabResultatsJunior(), !empty($_SESSION['is_admin']));
                ?>
            </div>
        </main>
    </div>
    <footer>
        <div class="contact">
            <a href="mailto:2253910@crosemont.qc.ca">CONTACT</a>
        </div>
    </footer>
</body>
</html>