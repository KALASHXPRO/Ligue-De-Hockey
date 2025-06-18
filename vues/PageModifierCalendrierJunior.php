<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!ISSET($controleur)) header("Location: ..\\index.php");
include_once("modele/DAO/EquipesJuniorDAO.class.php");
$equipes = EquipesJuniorDAO::obtenirToutesLesEquipes();
$calendrier = $controleur->getCalendrierJunior(); 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Modifier un match junior</title>
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
            <div class="apropos"><h2>Modifier un match junior</h2></div>
            <div class="texte">
                <form action="?action=modifierCalendrierJunior" method="post" class="form-container">
                    <input type="hidden" name="idMatch" value="<?php echo htmlspecialchars($calendrier->getId()); ?>">
                    
                    <label for="dateMatch">Date du match :</label>
                    <input type="date" id="dateMatch" name="dateMatch" value="<?php echo htmlspecialchars($calendrier->getDate()); ?>" required>

                    <label for="lieuMatch">Lieu du match :</label>
                    <input type="text" id="lieuMatch" name="lieuMatch" value="<?php echo htmlspecialchars($calendrier->getLieu()); ?>" required>

                    <label for="equipeLocale">Équipe Locale :</label>
                    <select id="equipeLocale" name="equipeLocale" required>
                        <option value="">Sélectionnez une équipe</option>
                        <?php foreach ($equipes as $equipe) { ?>
                            <option value="<?php echo htmlspecialchars($equipe->getNom()); ?>"
                                    <?php echo ($equipe->getNom() === $calendrier->getEquipeLocale()) ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($equipe->getNom()); ?>
                            </option>
                        <?php } ?>
                    </select>

                    <label for="equipeVisiteuse">Équipe Visiteuse :</label>
                    <select id="equipeVisiteuse" name="equipeVisiteuse" required>
                        <option value="">Sélectionnez une équipe</option>
                        <?php foreach ($equipes as $equipe) { ?>
                            <option value="<?php echo htmlspecialchars($equipe->getNom()); ?>"
                                    <?php echo ($equipe->getNom() === $calendrier->getEquipeVisiteuse()) ? 'selected' : ''; ?>>
                                <?php echo htmlspecialchars($equipe->getNom()); ?>
                            </option>
                        <?php } ?>
                    </select>

                    <button type="submit" class="btn-action edit">Modifier le match</button>
                </form>
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