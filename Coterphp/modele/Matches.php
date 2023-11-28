<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Le calendrier des matches</title>
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
    <div class="CalendrierTableaux">
    <?php 
    include "produit.class.php";
   
    $unMatchMajeur = array(
    new Matches_Ligue_Majeur(1,"2023-01-04","Aréna Saint-Luc","Les Sabres enflammées","Les Sénateurs de Toronto"),
    new Matches_Ligue_Majeur(2,"2023-04-12","Aréna Tampa Sud","Les Faucons de Tampa Sud","Les Faucons de Laval"),
    new Matches_Ligue_Majeur(3,"2023-02-24","Aréna Appalaches","Les Ours Gris des montagnes","Les Phoénix Glacés"),
    new Matches_Ligue_Majeur(4,"2023-09-29","Centre Well","Les Bruins de Montréal","Les lightskins sauvages"),
    new Matches_Ligue_Majeur(5,"2023-10-22","Aréna de Toronto","Les Sénateurs de Toronto","Les Marmottes givrées"),
    );
    $unMatchJunior = array(
        new Matches_Ligue_Junior (1,"2024-01-28","Centre Well","Les lightings de Montréal","Les Aiglons Noires"),
        new Matches_Ligue_Junior(2,"2024-03-04","NYC Arèna","Soak City","Les Patins Aiguisé"),
        new Matches_Ligue_Junior(3,"2024-04-17","Centre Videotron d'Ottawa","Les penguins d'Ottawa","Les Dragons de glace"),
        new Matches_Ligue_Junior(4,"2024-02-29","Centre Longueuil","Les cyclone de Longueil","Les Patineurs Fringuants"),
        new Matches_Ligue_Junior(5,"2024-06-30","Saguenay Lac St-Jean","Les foudroyants de Saguenay","Les Requins Blancs"),
        );
    ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>NomLocal</th>
                <th>NomVisit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php  echo $unMatchMajeur[0]->getId() ?></td>
            <td><?php  echo $unMatchMajeur[0]->getDate() ?></td>
            <td><?php  echo $unMatchMajeur[0]->getLieu() ?></td>
            <td><?php  echo $unMatchMajeur[0]->getNomLocal() ?></td>
            <td><?php  echo $unMatchMajeur[0]->getNomVisit() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unMatchMajeur[1]->getId() ?></td>
            <td><?php  echo $unMatchMajeur[1]->getDate() ?></td>
            <td><?php  echo $unMatchMajeur[1]->getLieu() ?></td>
            <td><?php  echo $unMatchMajeur[1]->getNomLocal() ?></td>
            <td><?php  echo $unMatchMajeur[1]->getNomVisit() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unMatchMajeur[2]->getId() ?></td>
            <td><?php  echo $unMatchMajeur[2]->getDate() ?></td>
            <td><?php  echo $unMatchMajeur[2]->getLieu() ?></td>
            <td><?php  echo $unMatchMajeur[2]->getNomLocal() ?></td>
            <td><?php  echo $unMatchMajeur[2]->getNomVisit() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unMatchMajeur[3]->getId() ?></td>
            <td><?php  echo $unMatchMajeur[3]->getDate() ?></td>
            <td><?php  echo $unMatchMajeur[3]->getLieu() ?></td>
            <td><?php  echo $unMatchMajeur[3]->getNomLocal() ?></td>
            <td><?php  echo $unMatchMajeur[3]->getNomVisit() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unMatchMajeur[4]->getId() ?></td>
            <td><?php  echo $unMatchMajeur[4]->getDate() ?></td>
            <td><?php  echo $unMatchMajeur[4]->getLieu() ?></td>
            <td><?php  echo $unMatchMajeur[4]->getNomLocal() ?></td>
            <td><?php  echo $unMatchMajeur[4]->getNomVisit() ?></td>
            </tr>
            
            
           



        </tbody>
    </table>
    <table>
        <thead>
            <tr>
            <th>Id</th>
                <th>Date</th>
                <th>Lieu</th>
                <th>NomLocal</th>
                <th>NomVisit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php  echo $unMatchJunior[0]->getId() ?></td>
            <td><?php  echo $unMatchJunior[0]->getDate() ?></td>
            <td><?php  echo $unMatchJunior[0]->getLieu() ?></td>
            <td><?php  echo $unMatchJunior[0]->getNomLocal() ?></td>
            <td><?php  echo $unMatchJunior[0]->getNomVisit() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unMatchJunior[1]->getId() ?></td>
            <td><?php  echo $unMatchJunior[1]->getDate() ?></td>
            <td><?php  echo $unMatchJunior[1]->getLieu() ?></td>
            <td><?php  echo $unMatchJunior[1]->getNomLocal() ?></td>
            <td><?php  echo $unMatchJunior[1]->getNomVisit() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unMatchJunior[2]->getId() ?></td>
            <td><?php  echo $unMatchJunior[2]->getDate() ?></td>
            <td><?php  echo $unMatchJunior[2]->getLieu() ?></td>
            <td><?php  echo $unMatchJunior[2]->getNomLocal() ?></td>
            <td><?php  echo $unMatchJunior[2]->getNomVisit() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unMatchJunior[3]->getId() ?></td>
            <td><?php  echo $unMatchJunior[3]->getDate() ?></td>
            <td><?php  echo $unMatchJunior[3]->getLieu() ?></td>
            <td><?php  echo $unMatchJunior[3]->getNomLocal() ?></td>
            <td><?php  echo $unMatchJunior[3]->getNomVisit() ?></td>
            </tr>
            <tr>
            <td><?php  echo $unMatchJunior[4]->getId() ?></td>
            <td><?php  echo $unMatchJunior[4]->getDate() ?></td>
            <td><?php  echo $unMatchJunior[4]->getLieu() ?></td>
            <td><?php  echo $unMatchJunior[4]->getNomLocal() ?></td>
            <td><?php  echo $unMatchJunior[4]->getNomVisit() ?></td>
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