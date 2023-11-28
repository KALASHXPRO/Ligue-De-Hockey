<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Équipes Majeurs</title>
    <meta charset="utf-8" />
    <link rel="stylesheet"  href="../../Project_W/style.css" />
</head>

<body>
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

$unResultatJunior = array(
    new Resultat_Match_Junior("0-2","Les lightings de Montréal","Les Aiglons Noires",1),
new Resultat_Match_Junior("0-3","Soak City","Les Patins Aiguisé",2),
new Resultat_Match_Junior("4-4","Les penguins d'Ottawa","Les Dragons de glace",3),
new Resultat_Match_Junior("3-5","Les cyclone de Longueil","Les Patineurs Fringuants",4),
new Resultat_Match_Junior("2-1","Les foudroyants de Saguenay","Les Requins Blancs",5),
);

$unResultatMajeur = array(
new Resultat_Match_Majeur("2-0","Les Sabres enflammées","Les Sénateurs de Toronto",1),
new Resultat_Match_Majeur("1-3","Les Faucons de Tampa Sud","Les Faucons de Laval",2),
new Resultat_Match_Majeur("5-0","Les Ours Gris des montagnes","Les Phoénix Glacés",3),
new Resultat_Match_Majeur("0-0","Les Bruins de Montréal","Les lightskins sauvages",4),
new Resultat_Match_Majeur("4-2","Les Sénateurs de Toronto","Les Marmottes givrées",5),
);

    ?>
    <h1>Fichier de test pour la classe equipe</h1>


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




    <br />
    </body>

</html>