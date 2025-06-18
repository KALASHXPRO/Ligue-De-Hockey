# Ligue de Hockey - Application Web

Une application web complète pour la gestion d'une ligue de hockey, développée en PHP avec une architecture MVC.

## Table des matières

- [Fonctionnalités](#-fonctionnalités)
- [Architecture](#-architecture)
- [Installation](#-installation)
- [Utilisation](#-utilisation)
- [Technologies utilisées](#-technologies-utilisées)

## Fonctionnalités

### Gestion des utilisateurs
- **Connexion administrateur** : Interface sécurisée pour les administrateurs
- **Déconnexion** : Fermeture de session sécurisée
- **Gestion des sessions** : Système de session PHP

### Gestion des équipes
- **Équipes Juniors** :
  - Ajouter une nouvelle équipe junior
  - Modifier les informations d'une équipe existante
  - Supprimer une équipe
  - Consulter la liste des équipes juniors

- **Équipes Seniors** :
  - Ajouter une nouvelle équipe senior
  - Modifier les informations d'une équipe existante
  - Supprimer une équipe
  - Consulter la liste des équipes seniors

### Gestion du calendrier
- **Calendrier Juniors** :
  - Ajouter un nouveau match au calendrier
  - Modifier les détails d'un match existant
  - Supprimer un match du calendrier
  - Consulter le calendrier des matchs juniors

- **Calendrier Seniors** :
  - Ajouter un nouveau match au calendrier
  - Modifier les détails d'un match existant
  - Supprimer un match du calendrier
  - Consulter le calendrier des matchs seniors

### Gestion des résultats
- **Résultats Juniors** :
  - Ajouter le résultat d'un match
  - Modifier un résultat existant
  - Supprimer un résultat
  - Consulter les résultats des matchs juniors

- **Résultats Seniors** :
  - Ajouter le résultat d'un match
  - Modifier un résultat existant
  - Supprimer un résultat
  - Consulter les résultats des matchs seniors

### Interface utilisateur
- **Page d'accueil** : Présentation de la ligue avec carousel d'images
- **Interface responsive** : Design adaptatif pour tous les écrans
- **Navigation intuitive** : Menu de navigation clair et organisé
- **Carousel moderne** : Diaporama automatique avec contrôles

## Architecture

L'application suit le pattern **MVC (Modèle-Vue-Contrôleur)** :

### Modèle (Modele/)
- **Classes métier** :
  - `Utilisateur.class.php` : Gestion des utilisateurs
  - `Equipes.class.php` : Gestion des équipes
  - `Calendrier.class.php` : Gestion du calendrier
  - `Resultat.class.php` : Gestion des résultats

- **Couche DAO** :
  - `AbstractDAO.class.php` : Classe abstraite pour les opérations de base
  - `UtilisateurDAO.class.php` : Accès aux données utilisateurs
  - `EquipesJuniorDAO.class.php` / `EquipesSeniorDAO.class.php` : Accès aux données équipes
  - `CalendrierJuniorDAO.class.php` / `CalendrierSeniorDAO.class.php` : Accès aux données calendrier
  - `ResultatsJuniorDAO.class.php` / `ResultatsSeniorDAO.class.php` : Accès aux données résultats

### Contrôleurs (Controleurs/)
- **Contrôleurs d'authentification** :
  - `seConnecter.class.php` : Gestion de la connexion
  - `seDeconnecter.class.php` : Gestion de la déconnexion

- **Contrôleurs de consultation** :
  - `voirAdmin.class.php` : Interface d'administration
  - `controleurVoirEquipesJunior.class.php` / `controleurVoirEquipesSenior.class.php` : Affichage des équipes
  - `controleurVoirCalendrierJunior.class.php` / `controleurVoirCalendrierSenior.class.php` : Affichage du calendrier
  - `controleurVoirResultatsJunior.class.php` / `controleurVoirResultatsSenior.class.php` : Affichage des résultats

- **Contrôleurs de gestion** :
  - `ajouterEquipeJunior.class.php` / `ajouterEquipeSenior.class.php` : Ajout d'équipes
  - `modifierEquipeJunior.class.php` / `modifierEquipeSenior.class.php` : Modification d'équipes
  - `supprimerEquipeJunior.class.php` / `supprimerEquipeSenior.class.php` : Suppression d'équipes
  - `ajouterCalendrierJunior.class.php` / `ajouterCalendrierSenior.class.php` : Ajout de matchs
  - `modifierCalendrierJunior.class.php` / `modifierCalendrierSenior.class.php` : Modification de matchs
  - `supprimerCalendrierJunior.class.php` / `supprimerCalendrierSenior.class.php` : Suppression de matchs
  - `ajouterResultatJunior.class.php` / `ajouterResultatSenior.class.php` : Ajout de résultats
  - `modifierResultatJunior.class.php` / `modifierResultatSenior.class.php` : Modification de résultats
  - `supprimerResultatJunior.class.php` / `supprimerResultatSenior.class.php` : Suppression de résultats

### Vues (Vues/)
- **Pages principales** :
  - `PageAccueil.php` : Page d'accueil avec carousel
  - `PageConnexion.php` : Interface de connexion
  - `PageAdmin.php` : Interface d'administration

- **Pages de gestion des équipes** :
  - `PageEquipes.php` / `PageEquipes2.php` : Affichage des équipes
  - `PageAjouterEquipeJunior.php` / `PageAjouterEquipeSenior.php` : Formulaires d'ajout
  - `PageModifierEquipeJunior.php` / `PageModifierEquipeSenior.php` : Formulaires de modification

- **Pages de gestion du calendrier** :
  - `PageCalendrier.php` / `PageCalendrier2.php` : Affichage du calendrier
  - `PageAjouterCalendrierJunior.php` / `PageAjouterCalendrierSenior.php` : Formulaires d'ajout
  - `PageModifierCalendrierJunior.php` / `PageModifierCalendrierSenior.php` : Formulaires de modification

- **Pages de gestion des résultats** :
  - `PageResultats.php` / `PageResultats2.php` : Affichage des résultats
  - `PageAjouterResultatJunior.php` / `PageAjouterResultatSenior.php` : Formulaires d'ajout
  - `PageModifierResultatJunior.php` / `PageModifierResultatSenior.php` : Formulaires de modification

## Installation

### Prérequis
- Serveur web (Apache/Nginx)
- PHP 7.4 ou supérieur
- MySQL 5.7 ou supérieur
- UwAmp (recommandé pour le développement)

### Étapes d'installation

1. **Cloner le projet**
   ```bash
   git clone [URL_DU_REPO]
   cd liguedehockey
   ```

2. **Configurer la base de données**
   - Créer une base de données MySQL
   - Importer le fichier `sql/script de création BD.sql`
   - Configurer les paramètres de connexion dans `modele/DAO/configs/`

3. **Configurer le serveur web**
   - Placer le projet dans le répertoire web (ex: `www/liguedehockey/`)

4. **Accéder à l'application**
   - Ouvrir votre navigateur
   - Aller à `http://localhost/liguedehockey/`

5. **Notes complémentaires**
   - Utilisation de UwAmp

## Utilisation

### Connexion administrateur
1. Accéder à la page de connexion
2. Saisir les identifiants administrateur
3. Accéder au panneau d'administration

### Gestion des équipes
1. **Ajouter une équipe** :
   - Aller dans "Gestion des équipes"
   - Cliquer sur "Ajouter une équipe"
   - Remplir le formulaire
   - Valider

2. **Modifier une équipe** :
   - Cliquer sur "Modifier" à côté de l'équipe
   - Modifier les informations
   - Sauvegarder

3. **Supprimer une équipe** :
   - Cliquer sur "Supprimer" à côté de l'équipe
   - Confirmer la suppression

### Gestion du calendrier
1. **Ajouter un match** :
   - Aller dans "Gestion du calendrier"
   - Cliquer sur "Ajouter un match"
   - Remplir les détails (date, heure, lieu, équipes)
   - Valider

2. **Modifier un match** :
   - Cliquer sur "Modifier" à côté du match
   - Modifier les informations
   - Sauvegarder

### Gestion des résultats
1. **Ajouter un résultat** :
   - Aller dans "Gestion des résultats"
   - Cliquer sur "Ajouter un résultat"
   - Sélectionner le match
   - Saisir le score
   - Valider

## Technologies utilisées

- **Backend** : PHP 7.4+
- **Base de données** : MySQL 5.7+
- **Frontend** : HTML5, CSS3, JavaScript
- **Architecture** : MVC (Modèle-Vue-Contrôleur)
- **Serveur** : Apache/Nginx
- **Framework CSS** : Bootstrap 5.0.2
- **Outils de développement** : UwAmp



