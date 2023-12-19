CREATE DATABASE ligueHockeyDB DEFAULT CHARACTER SET utf8 COLLATE utf8tf8_unicode_ci;

USE ligueHockeyDB;

CREATE TABLE Utilisateurs
(
    utilisateur VARCHAR(255),
    motdepasse VARCHAR(255),
    CONSTRAINT utilisateur_pk PRIMARY KEY (utilisateur)
);

INSERT INTO Utilisateurs VALUES ('root','root');
INSERT INTO Utilisateurs VALUES ('ismail','1234');


CREATE TABLE Equipes_Majeures
(
    id_equipes_majeurs INT PRIMARY KEY,
    nom_equipes_majeurs VARCHAR(65)
);

INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(1,"Les Griffons Glaciaires");
INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(2,"Les Faucons de Tampa Sud");
INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(3,"Les Bruins de Montréal");
INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(4,"Les lightskins sauvages");
INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(5,"Les Faucons de Laval");
INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(6,"Les Ours Gris des montagnes");
INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(7,"Les Phoénix Glacés");
INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(8,"Les Sénateurs de Toronto");
INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(9,"Les Marmottes givrées");
INSERT INTO Equipes_Majeures(id_equipes_majeurs,nom_equipes_majeurs)
VALUES(10,"Les Sabres enflammées");

CREATE TABLE Matches_Ligue_Majeure
(
    id_matches_majeurs INT PRIMARY KEY,
    date_matches_majeurs DATE,
    lieu_matches_majeurs VARCHAR(100),
    nom_equipes_locales_majeures VARCHAR(65),
    nom_equipes_visiteuses_majeures VARCHAR(65)
);

INSERT INTO Matches_Ligue_Majeure(id_matches_majeurs,date_matches_majeurs,lieu_matches_majeurs,nom_equipes_locales_majeures,
nom_equipes_visiteuses_majeures)
VALUES(1,"2023-01-04","Aréna Saint-Luc","Les Sabres enflammées","Les Sénateurs de Toronto");
INSERT INTO Matches_Ligue_Majeure(id_matches_majeurs,date_matches_majeurs,lieu_matches_majeurs,nom_equipes_locales_majeures,
nom_equipes_visiteuses_majeures)
VALUES(2,"2023-04-12","Aréna Tampa Sud","Les Faucons de Tampa Sud","Les Faucons de Laval");
INSERT INTO Matches_Ligue_Majeure(id_matches_majeurs,date_matches_majeurs,lieu_matches_majeurs,nom_equipes_locales_majeures,
nom_equipes_visiteuses_majeures)
VALUES(3,"2023-02-24","Aréna Appalaches","Les Ours Gris des montagnes","Les Phoénix Glacés");
INSERT INTO Matches_Ligue_Majeure(id_matches_majeurs,date_matches_majeurs,lieu_matches_majeurs,nom_equipes_locales_majeures,
nom_equipes_visiteuses_majeures)
VALUES(4,"2023-09-29","Centre Well","Les Bruins de Montréal","Les lightskins sauvages");
INSERT INTO Matches_Ligue_Majeure(id_matches_majeurs,date_matches_majeurs,lieu_matches_majeurs,nom_equipes_locales_majeures,
nom_equipes_visiteuses_majeures)
VALUES(5,"2023-10-22","Aréna de Toronto","Les Sénateurs de Toronto","Les Marmottes givrées");

CREATE TABLE Resultats_Majeurs (
    score_matchs VARCHAR(6) PRIMARY KEY,
    nom_equipes_locales_majeures VARCHAR(65),
    nom_equipes_visiteuses_majeures VARCHAR(65),
    id_matches_majeurs INT,
    FOREIGN KEY (id_matches_majeurs) REFERENCES Matches_Ligue_Majeure(id_matches_majeurs)
);

INSERT INTO Resultats_Majeurs(score_matchs,nom_equipes_locales_majeures,nom_equipes_visiteuses_majeures,id_matches_majeurs)
VALUES("2-0","Les Sabres enflammées","Les Sénateurs de Toronto",1);
INSERT INTO Resultats_Majeurs(score_matchs,nom_equipes_locales_majeures,nom_equipes_visiteuses_majeures,id_matches_majeurs)
VALUES("1-3","Les Faucons de Tampa Sud","Les Faucons de Laval",2);
INSERT INTO Resultats_Majeurs(score_matchs,nom_equipes_locales_majeures,nom_equipes_visiteuses_majeures,id_matches_majeurs)
VALUES("5-0","Les Ours Gris des montagnes","Les Phoénix Glacés",3);
INSERT INTO Resultats_Majeurs(score_matchs,nom_equipes_locales_majeures,nom_equipes_visiteuses_majeures,id_matches_majeurs)
VALUES("0-0","Les Bruins de Montréal","Les lightskins sauvages",4);
INSERT INTO Resultats_Majeurs(score_matchs,nom_equipes_locales_majeures,nom_equipes_visiteuses_majeures,id_matches_majeurs)
VALUES("4-2","Les Sénateurs de Toronto","Les Marmottes givrées",5);

CREATE TABLE Equipes_Juniors
(
 id_equipes_juniors INT,
 nom_equipes_juniors VARCHAR(65)
);

INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(11,"Les cyclone de Longueil");
INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(12,"Les Aiglons Noires");
INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(13,"Les Dragons de glace");
INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(14,"Les Requins Blancs");
INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(15,"Les Patineurs Fringuants");
INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(16,"Les penguins d'Ottawa");
INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(17,"Les Patins Aiguisé");
INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(18,"Soak City");
INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(19,"Les foudroyants de Saguenay");
INSERT INTO Equipes_Juniors(id_equipes_juniors,nom_equipes_juniors)
VALUES(20,"Les lightings de Montréal");

CREATE TABLE Matches_Ligue_Junior
(
    id_matches_juniors INT PRIMARY KEY,
    date_matches_juniors DATE,
    lieu_matches_juniors VARCHAR(100),
    nom_equipes_locales_juniors VARCHAR(65),
    nom_equipes_visiteuses_juniors VARCHAR(65)
);

INSERT INTO Matches_Ligue_Junior(id_matches_juniors, date_matches_juniors,lieu_matches_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors)
VALUES(1,"2024-01-28","Centre Well","Les lightings de Montréal","Les Aiglons Noires");
INSERT INTO Matches_Ligue_Junior(id_matches_juniors, date_matches_juniors,lieu_matches_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors)
VALUES(2,"2024-03-04","NYC Arèna","Soak City","Les Patins Aiguisé");
INSERT INTO Matches_Ligue_Junior(id_matches_juniors, date_matches_juniors,lieu_matches_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors)
VALUES(3,"2024-04-17","Centre Videotron d'Ottawa","Les penguins d'Ottawa","Les Dragons de glace");
INSERT INTO Matches_Ligue_Junior(id_matches_juniors, date_matches_juniors,lieu_matches_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors)
VALUES(4,"2024-02-29","Centre Longueuil","Les cyclone de Longueil","Les Patineurs Fringuants");
INSERT INTO Matches_Ligue_Junior(id_matches_juniors, date_matches_juniors,lieu_matches_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors)
VALUES(5,"2024-06-30","Saguenay Lac St-Jean","Les foudroyants de Saguenay","Les Requins Blancs");

CREATE TABLE Resultats_Juniors (
    score_matchs_juniors VARCHAR(6) PRIMARY KEY,
    nom_equipes_locales_juniors VARCHAR(65),
    nom_equipes_visiteuses_juniors VARCHAR(65),
    id_matches_juniors INT,
    FOREIGN KEY (id_matches_juniors) REFERENCES Matches_Ligue_Junior(id_matches_juniors)
);

INSERT INTO Resultats_Juniors(score_matchs_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors,id_matches_juniors)
VALUES("0-2","Les lightings de Montréal","Les Aiglons Noires",1);
INSERT INTO Resultats_Juniors(score_matchs_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors,id_matches_juniors)
VALUES("0-3","Soak City","Les Patins Aiguisé",2);
INSERT INTO Resultats_Juniors(score_matchs_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors,id_matches_juniors)
VALUES("4-4","Les penguins d'Ottawa","Les Dragons de glace",3);
INSERT INTO Resultats_Juniors(score_matchs_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors,id_matches_juniors)
VALUES("3-5","Les cyclone de Longueil","Les Patineurs Fringuants",4);
INSERT INTO Resultats_Juniors(score_matchs_juniors,nom_equipes_locales_juniors,nom_equipes_visiteuses_juniors,id_matches_juniors)
VALUES("2-1","Les foudroyants de Saguenay","Les Requins Blancs",5)

