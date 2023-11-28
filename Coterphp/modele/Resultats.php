<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Les résultats des matches</title>
</head>
<body>

    <header>
        <div class="Header-elements">
            <div class="site-logo"><img src="images/logo.png"  width="200" height="150" alt="imagedulogo"></div>
            <div class="NomDuSite">
              <div>
              <h1>Bienvenue a la league de hockey</h1></div>
              <a href="pageconnexionadmin.html"><p class="seconnecter">Se connecter</p></a>
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
                <li><a href="PageAccueil.html" >Page d'accueil</a></li>
                <li><a href="Matches.php" >Les calendriers de nos tournois</a></li>
                <li><a href="Resultats.php" >Les résultats des matches</a></li>
                <li><a href="EquipesPhp.php" >Nos équipes</a></li>

            </ul>
        </div>
        </div>
    <div class="ResultatsTableaux">
    <?php 
    include "produit.class.php";
    $unResultatMajeur = array(
        new Resultat_Match_Majeur("2-0","Les Sabres enflammées","Les Sénateurs de Toronto",1),
        new Resultat_Match_Majeur("1-3","Les Faucons de Tampa Sud","Les Faucons de Laval",2),
        new Resultat_Match_Majeur("5-0","Les Ours Gris des montagnes","Les Phoénix Glacés",3),
        new Resultat_Match_Majeur("0-0","Les Bruins de Montréal","Les lightskins sauvages",4),
        new Resultat_Match_Majeur("4-2","Les Sénateurs de Toronto","Les Marmottes givrées",5),
        );
        
    $unResultatJunior = array(
        new Resultat_Match_Junior("0-2","Les lightings de Montréal","Les Aiglons Noires",1),
        new Resultat_Match_Junior("0-3","Soak City","Les Patins Aiguisé",2),
        new Resultat_Match_Junior("4-4","Les penguins d'Ottawa","Les Dragons de glace",3),
        new Resultat_Match_Junior("3-5","Les cyclone de Longueil","Les Patineurs Fringuants",4),
        new Resultat_Match_Junior("2-1","Les foudroyants de Saguenay","Les Requins Blancs",5),
        );


    ?>
    
    <table>
        <thead>
            <tr>
            <th>Score</th>
                <th>Local</th>
                <th>Visiteurs</th>
                <th>Id</th>
                
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php  echo $unResultatMajeur[0]->getScore() ?></td>
            <td><?php  echo $unResultatMajeur[0]->getNomLocal() ?></td>
            <td><?php  echo $unResultatMajeur[0]->getNomVisit() ?></td>
            <td><?php  echo $unResultatMajeur[0]->getId() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unResultatMajeur[1]->getScore() ?></td>
            <td><?php  echo $unResultatMajeur[1]->getNomLocal() ?></td>
            <td><?php  echo $unResultatMajeur[1]->getNomVisit() ?></td>
            <td><?php  echo $unResultatMajeur[1]->getId() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unResultatMajeur[2]->getScore() ?></td>
            <td><?php  echo $unResultatMajeur[2]->getNomLocal() ?></td>
            <td><?php  echo $unResultatMajeur[2]->getNomVisit() ?></td>
            <td><?php  echo $unResultatMajeur[2]->getId() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unResultatMajeur[3]->getScore() ?></td>
            <td><?php  echo $unResultatMajeur[3]->getNomLocal() ?></td>
            <td><?php  echo $unResultatMajeur[3]->getNomVisit() ?></td>
            <td><?php  echo $unResultatMajeur[3]->getId() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unResultatMajeur[4]->getScore() ?></td>
            <td><?php  echo $unResultatMajeur[4]->getNomLocal() ?></td>
            <td><?php  echo $unResultatMajeur[4]->getNomVisit() ?></td>
            <td><?php  echo $unResultatMajeur[4]->getId() ?></td>
            </tr>
            
            
           



        </tbody>
    </table>


    <table>
        <thead>
            <tr>
            <th>Score</th>
                <th>Local</th>
                <th>Visiteurs</th>
                <th>Id</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php  echo $unResultatJunior[0]->getScore() ?></td>
            <td><?php  echo $unResultatJunior[0]->getNomLocal() ?></td>
            <td><?php  echo $unResultatJunior[0]->getNomVisit() ?></td>
            <td><?php  echo $unResultatJunior[0]->getId() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unResultatJunior[1]->getScore() ?></td>
            <td><?php  echo $unResultatJunior[1]->getNomLocal() ?></td>
            <td><?php  echo $unResultatJunior[1]->getNomVisit() ?></td>
            <td><?php  echo $unResultatJunior[1]->getId() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unResultatJunior[2]->getScore() ?></td>
            <td><?php  echo $unResultatJunior[2]->getNomLocal() ?></td>
            <td><?php  echo $unResultatJunior[2]->getNomVisit() ?></td>
            <td><?php  echo $unResultatJunior[2]->getId() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unResultatJunior[3]->getScore() ?></td>
            <td><?php  echo $unResultatJunior[3]->getNomLocal() ?></td>
            <td><?php  echo $unResultatJunior[3]->getNomVisit() ?></td>
            <td><?php  echo $unResultatJunior[3]->getId() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unResultatJunior[4]->getScore() ?></td>
            <td><?php  echo $unResultatJunior[4]->getNomLocal() ?></td>
            <td><?php  echo $unResultatJunior[4]->getNomVisit() ?></td>
            <td><?php  echo $unResultatJunior[4]->getId() ?></td>
            </tr>
            
            
           



        </tbody>
    </table>
    

    </div>
    </div>

    <footer>
        <div class="contact">
          <h2><a href="mailto:2253910@crosemont.qc.ca"><h2>Contact</h2></a></h2>
      </div>
      
      </footer>
    

</body>
</html>