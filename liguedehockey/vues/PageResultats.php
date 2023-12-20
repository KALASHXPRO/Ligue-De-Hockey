<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="carouselscript.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
</head>
<body>

    <header>
            <div class="Header-elements">
                <div class="site-logo"><img src="images/logo.png"  width="200" height="150" alt="imagedulogo"></div>
                <div class="NomDuSite">
                  <div>
                  <h1>Bienvenue a la league de hockey</h1></div>
                  <a href="?action=voirConnexion"><p class="seconnecter">Se connecter</p></a>
                </div>
              </div>
        <div class="apropos"><h2>A propos</h2></div>
        <div class="texte"><p>Nous sommes ravis de vous 
          accueillir dans notre communauté de passionnés de hockey. <br>  
          Explorez notre site pour découvrir toutes les informations sur 
          les équipes, les calendriers, les actualités et bien plus encore.</p></div>
    </header>
    <div class="corps">
        

        
        <div id="menu">
            <div><h2>MENU</h2></div> 
            <div id="listeMenu">          
            <ul>
                <li><a href="?action=voirPageAccueil" >Page d'accueil</a></li>
                <li><a href="?action=voirEquipes" >Les equipes majeures</a></li>
                <li><a href="?action=voirEquipes2" >Les equipes juniors</a></li>
                <li><a href="?action=voirResultats" >Les resultats majeures</a></li>
                <li><a href="?action=voirResultats2" >Les resultats juniors</a></li>
                <li><a href="?action=voirCalendrier" >Le calendrier majeures</a></li>
                <li><a href="?action=voirCalendrier2" >Le calendrier juniors</a></li>
            </ul>
        </div>
        </div>

        <div class="ResultatsTableaux">
        
        <?php
            // ==================== Utilisation des fonctions d'affichage ===================== 
            include "/vues/inclusions/fonctions.inc.php";
            afficherTableResultats($controleur->getTabResultats());
        
        ?>
        </div>



        

    </div>
    <footer>
      <div class="contact">
        <h2><a href="mailto:2253910@crosemont.qc.ca"><h2>Contact</h2></a></h2>
    </div>
    
    
    </footer>
    
  
    

</body>
</html>