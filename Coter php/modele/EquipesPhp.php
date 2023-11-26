<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Project_W/style.css">
    <title>Accueil</title>
</head>
<body>

    <header>
            <div class="Header-elements">
                <div class="site-logo"><img src="Project_W/images/logo.png"  width="200" height="150" alt="imagedulogo"></div>
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
                <li><a href="Calendrier.html" >Les calendriers de nos tournois</a></li>
                <li><a href="Resultats.html" >Les résultats des matches</a></li>
                <li><a href="ClassementTournoi.html" >Catégorie et Classements des tournois</a></li>
                <li><a href="Équipes.php" >Nos équipes</a></li>

            </ul>
        </div>
        </div>
        <div class="Équipes">
        <?php 
    include "produit.class.php";
   
    

    
    $uneEquipeMajeur = array(
        new Equipe_Majeur(1,"Les Griffons Glaciaires"),
        new Equipe_Majeur(2,"Les Faucons de Tampa Sud"),
        new Equipe_Majeur(3,"Les Bruins de Montréal"),
        new Equipe_Majeur(4,"Les lightskins sauvages"),
        new Equipe_Majeur(5,"Les Faucons de Laval"),
        new Equipe_Majeur(6,"Les Ours Gris des montagnes"),
        new Equipe_Majeur(7,"Les Phoénix Glacés"),
        new Equipe_Majeur(8,"Les Sénateurs de Toronto"),
        new Equipe_Majeur(9,"Les Marmottes givrées"),
        new Equipe_Majeur(10,"Les Sabres enflammées"),
    );
    $uneEquipeJunior = array(
        new Equipe_Juniors(11,"Les cyclone de Longueil"),
        new Equipe_Juniors(12,"Les Aiglons Noires"),
        new Equipe_Juniors(13,"Les Dragons de glace"),
        new Equipe_Juniors(14,"Les Requins Blancs"),
        new Equipe_Juniors(15,"Les Patineurs Fringuants"),
        new Equipe_Juniors(16,"Les penguins d'Ottawa"),
        new Equipe_Juniors(17,"Les Patins Aiguisé"),
        new Equipe_Juniors(18,"Soak City"),
        new Equipe_Juniors(19,"Les foudroyants de Saguenay"),
        new Equipe_Juniors(20,"Les lightings de Montréal"),
    );
    ?>
    
          <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?php  echo $uneEquipeMajeur[0]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[0]->getNom() ?></td>
                </tr>
                <tr>
                <td><?php  echo $uneEquipeMajeur[1]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[1]->getNom() ?></td>
                </tr>
                <tr>
                <td><?php  echo $uneEquipeMajeur[2]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[2]->getNom() ?></td>
                </tr>
                <tr>
                <td><?php  echo $uneEquipeMajeur[3]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[3]->getNom() ?></td>
                </tr>
                <tr>
                <td><?php  echo $uneEquipeMajeur[4]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[4]->getNom() ?></td>
                </tr>
                <tr>
                <td><?php  echo $uneEquipeMajeur[5]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[5]->getNom() ?></td>
                </tr>
                <tr>
                <td><?php  echo $uneEquipeMajeur[6]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[6]->getNom() ?></td>
                </tr>
                <tr>
                <td><?php  echo $uneEquipeMajeur[7]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[7]->getNom() ?></td>
                </tr>
                <tr>
                <td><?php  echo $uneEquipeMajeur[8]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[8]->getNom() ?></td>
                </tr>
                <tr>
                <td><?php  echo $uneEquipeMajeur[9]->getId() ?></td>
                <td><?php  echo $uneEquipeMajeur[9]->getNom() ?></td>
                </tr>
                
               
    
    
    
            </tbody>
        </table>
        <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><?php  echo $uneEquipeJunior[0]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[0]->getNom() ?></td>
            </tr>
            <tr>
            <td><?php  echo $uneEquipeJunior[1]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[1]->getNom() ?></td>
            </tr>
            <tr>
            <td><?php  echo $uneEquipeJunior[2]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[2]->getNom() ?></td>
            </tr>
            <tr>
            <td><?php  echo $uneEquipeJunior[3]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[3]->getNom() ?></td>
            </tr>
            <tr>
            <td><?php  echo $uneEquipeJunior[4]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[4]->getNom() ?></td>
            </tr>
            <tr>
            <td><?php  echo $uneEquipeJunior[5]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[5]->getNom() ?></td>
            </tr>
            <tr>
            <td><?php  echo $uneEquipeJunior[6]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[6]->getNom() ?></td>
            </tr>
            <tr>
            <td><?php  echo $uneEquipeJunior[7]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[7]->getNom() ?></td>
            </tr>
            <tr>
            <td><?php  echo $uneEquipeJunior[8]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[8]->getNom() ?></td>
            </tr>
            <tr>
            <td><?php  echo $uneEquipeJunior[9]->getId() ?></td>
            <td><?php  echo $uneEquipeJunior[9]->getNom() ?></td>
            </tr>
            
           



        </tbody>
    </table>
        </div>


        
        </div>

    </div>
    <footer>
      <div class="contact">
        <h2><a href="mailto:2253910@crosemont.qc.ca"><h2>Contact</h2></a></h2>
    </div>
    
    
    </footer>
    
  
    

</body>
</html>