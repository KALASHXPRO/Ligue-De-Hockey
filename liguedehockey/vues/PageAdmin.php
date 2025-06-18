<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['is_admin'])) {
    header('Location: ?action=seConnecter');
    exit;
}
if(!ISSET($controleur)) header("Location: ..\\index.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Administration</title>
</head>
<body>
    <header>
        <div class="Header-elements">
            <div class="site-logo"><img src="images/logo.png" width="160" height="120" alt="imagedulogo"></div>
            <div class="NomDuSite">
                <h1>Administration - Ligue de Hockey</h1>
                <h5 style='color:white;text-align:center'>Bienvenue <?php echo htmlspecialchars($_SESSION['utilisateurConnecte']); ?></h5>
            </div>
            <a href="?action=seDeconnecter" class="seconnecter">Se déconnecter</a>
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
            <div class="apropos"><h2>Gestion des équipes</h2></div>
            <div class="texte">Vous pouvez ajouter, modifier ou supprimer des équipes.</div>
            <a href="?action=ajouterEquipe" class="login-btn" style="margin-bottom:20px;display:inline-block;">Ajouter une équipe</a>
            <div class="Équipes">
                <?php
                include_once "vues/inclusions/fonctions.inc.php";
                afficherTableEquipesSenior($controleur->getTabEquipesSenior(), true);
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