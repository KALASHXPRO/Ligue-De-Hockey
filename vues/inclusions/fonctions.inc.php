<?php
function afficherErreurs($tabMessages) {
	if (count($tabMessages) > 0) {
		echo "<div class=\"login-error\">";
		echo "<ul>";
		foreach ($tabMessages as $message) {
			echo "<li>$message</li>";
		}	
		echo "</ul>";
		echo "</div>";
	}
}
function afficherMenu($tableau, $indiceOptionActive) {
    echo "<ul>";
    $i = 0;
    foreach ($tableau as $itemMenu => $lien) {
        $classe = "";
        if ($indiceOptionActive == $i) {
            $classe = " class='option_active'";
        }
        echo "<li $classe><a href='$lien'>$itemMenu</a></li>";
        $i++;
    }
    echo "</ul>";
}

function afficherUneEquipeSenior($UneEquipeSenior) {
    echo "<ul>";
    echo "<li>Id :" . $UneEquipeSenior->getId() . "</li>";
    echo "<li>Nom :" . $UneEquipeSenior->getNom() . "</li>";
    echo "</ul>";   
}

function afficherTableEquipesSenior($unTableauSenior, $isAdmin = false) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Nom</th>";
    if ($isAdmin) {
        echo "<th>Actions</th>";
    }
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableauSenior as $UneEquipeSenior) {
        echo "<tr>";
        echo "<td>" . $UneEquipeSenior->getId() . "</td>";
        echo "<td>" . $UneEquipeSenior->getNom() . "</td>";
        if ($isAdmin) {
            echo "<td>";
            echo "<a href=\"?action=modifierEquipeSenior&id=" . $UneEquipeSenior->getId() . "\" class=\"btn-action edit\">Modifier</a>";
            echo "<a href=\"?action=supprimerEquipeSenior&id=" . $UneEquipeSenior->getId() . "\" class=\"btn-action delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette équipe ?');\">Supprimer</a>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUneEquipeJunior($UneEquipeJunior) {
    echo "<ul>";
    echo "<li>Id :" . $UneEquipeJunior->getId() . "</li>";
    echo "<li>Nom :" . $UneEquipeJunior->getNom() . "</li>";
    echo "</ul>";
}

function afficherTableEquipesJunior($unTableauJunior, $isAdmin = false) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Nom</th>";
    if ($isAdmin) {
        echo "<th>Actions</th>";
    }
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableauJunior as $UneEquipeJunior) {
        echo "<tr>";
        echo "<td>" . $UneEquipeJunior->getId() . "</td>";
        echo "<td>" . $UneEquipeJunior->getNom() . "</td>";
        if ($isAdmin) {
            echo "<td>";
            echo "<a href=\"?action=modifierEquipeJunior&id=" . $UneEquipeJunior->getId() . "\" class=\"btn-action edit\">Modifier</a>";
            echo "<a href=\"?action=supprimerEquipeJunior&id=" . $UneEquipeJunior->getId() . "\" class=\"btn-action delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette équipe ?');\">Supprimer</a>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUnResultatSenior($UnResultatSenior) {
    echo "<ul>";
    echo "<li>Id :" . $UnResultatSenior->getScore() . "</li>";
    echo "<li>Nom :" . $UnResultatSenior->getEquipeLocale() . "</li>";
    echo "<li>Id :" . $UnResultatSenior->getEquipeVisiteuse() . "</li>";
    echo "<li>Id :" . $UnResultatSenior->getIdMatch() . "</li>";
    echo "</ul>";
}

function afficherTableResultatsSenior($unTableauSenior, $isAdmin = false) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Score</th>";
    echo "<th>Equipe Locale</th>";
    echo "<th>Equipe Visiteuse</th>";
    echo "<th>Id Match</th>";
    if ($isAdmin) {
        echo "<th>Actions</th>";
    }
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableauSenior as $UnResultatSenior) {
        echo "<tr>";
        echo "<td>" . $UnResultatSenior->getScore() . "</td>";
        echo "<td>" . $UnResultatSenior->getEquipeLocale() . "</td>";
        echo "<td>" . $UnResultatSenior->getEquipeVisiteuse() . "</td>";
        echo "<td>" . $UnResultatSenior->getIdMatch() . "</td>";
        if ($isAdmin) {
            echo "<td>";
            echo "<a href=\"?action=modifierResultatSenior&id=" . $UnResultatSenior->getIdMatch() . "\" class=\"btn-action edit\">Modifier</a>";
            echo "<a href=\"?action=supprimerResultatSenior&id=" . $UnResultatSenior->getIdMatch() . "\" class=\"btn-action delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce résultat ?');\">Supprimer</a>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUnResultatJunior($UnResultatJunior) {
    echo "<ul>";
    echo "<li>Id :" . $UnResultatJunior->getScore() . "</li>";
    echo "<li>Nom :" . $UnResultatJunior->getEquipeLocale() . "</li>";
    echo "<li>Id :" . $UnResultatJunior->getEquipeVisiteuse() . "</li>";
    echo "<li>Id :" . $UnResultatJunior->getIdMatch() . "</li>";
    echo "</ul>";
}

function afficherTableResultatsJunior($unTableauJunior, $isAdmin = false) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Score</th>";
    echo "<th>Equipe Locale</th>";
    echo "<th>Equipe Visiteuse</th>";
    echo "<th>Id Match</th>";
    if ($isAdmin) {
        echo "<th>Actions</th>";
    }
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableauJunior as $UnResultatJunior) {
        echo "<tr>";
        echo "<td>" . $UnResultatJunior->getScore() . "</td>";
        echo "<td>" . $UnResultatJunior->getEquipeLocale() . "</td>";
        echo "<td>" . $UnResultatJunior->getEquipeVisiteuse() . "</td>";
        echo "<td>" . $UnResultatJunior->getIdMatch() . "</td>";
        if ($isAdmin) {
            echo "<td>";
            echo "<a href=\"?action=modifierResultatJunior&id=" . $UnResultatJunior->getIdMatch() . "\" class=\"btn-action edit\">Modifier</a>";
            echo "<a href=\"?action=supprimerResultatJunior&id=" . $UnResultatJunior->getIdMatch() . "\" class=\"btn-action delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce résultat ?');\">Supprimer</a>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUnCalendrierSenior($UnCalendrierSenior) {
    echo "<ul>";
    echo "<li>Id :" . $UnCalendrierSenior->getId() . "</li>";
    echo "<li>Nom :" . $UnCalendrierSenior->getDate() . "</li>";
    echo "<li>Id :" . $UnCalendrierSenior->getLieu() . "</li>";
    echo "<li>Id :" . $UnCalendrierSenior->getEquipeLocale() . "</li>";
    echo "<li>Id :" . $UnCalendrierSenior->getEquipeVisiteuse() . "</li>";
    echo "</ul>";
}

function afficherTableCalendriersSenior($unTableauSenior, $isAdmin = false) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Id Match</th>";
    echo "<th>Date Match</th>";
    echo "<th>Lieu Match</th>";
    echo "<th>Equipe Locale</th>";
    echo "<th>Equipe Visiteuse</th>";
    if ($isAdmin) {
        echo "<th>Actions</th>";
    }
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableauSenior as $UnCalendrierSenior) {
        echo "<tr>";
        echo "<td>" . $UnCalendrierSenior->getId() . "</td>";
        echo "<td>" . $UnCalendrierSenior->getDate() . "</td>";
        echo "<td>" . $UnCalendrierSenior->getLieu() . "</td>";
        echo "<td>" . $UnCalendrierSenior->getEquipeLocale() . "</td>";
        echo "<td>" . $UnCalendrierSenior->getEquipeVisiteuse() . "</td>";
        if ($isAdmin) {
            echo "<td>";
            echo "<a href=\"?action=modifierCalendrierSenior&id=" . $UnCalendrierSenior->getId() . "\" class=\"btn-action edit\">Modifier</a>";
            echo "<a href=\"?action=supprimerCalendrierSenior&id=" . $UnCalendrierSenior->getId() . "\" class=\"btn-action delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce match ?');\">Supprimer</a>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUnCalendrierJunior($UnCalendrierJunior) {
    echo "<ul>";
    echo "<li>Id :" . $UnCalendrierJunior->getId() . "</li>";
    echo "<li>Nom :" . $UnCalendrierJunior->getDate() . "</li>";
    echo "<li>Id :" . $UnCalendrierJunior->getLieu() . "</li>";
    echo "<li>Id :" . $UnCalendrierJunior->getEquipeLocale() . "</li>";
    echo "<li>Id :" . $UnCalendrierJunior->getEquipeVisiteuse() . "</li>";
    echo "</ul>";
}

function afficherTableCalendriersJunior($unTableauJunior, $isAdmin = false) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Id Match</th>";
    echo "<th>Date Match</th>";
    echo "<th>Lieu Match</th>";
    echo "<th>Equipe Locale</th>";
    echo "<th>Equipe Visiteuse</th>";
    if ($isAdmin) {
        echo "<th>Actions</th>";
    }
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableauJunior as $UnCalendrierJunior) {
        echo "<tr>";
        echo "<td>" . $UnCalendrierJunior->getId() . "</td>";
        echo "<td>" . $UnCalendrierJunior->getDate() . "</td>";
        echo "<td>" . $UnCalendrierJunior->getLieu() . "</td>";
        echo "<td>" . $UnCalendrierJunior->getEquipeLocale() . "</td>";
        echo "<td>" . $UnCalendrierJunior->getEquipeVisiteuse() . "</td>";
        if ($isAdmin) {
            echo "<td>";
            echo "<a href=\"?action=modifierCalendrierJunior&id=" . $UnCalendrierJunior->getId() . "\" class=\"btn-action edit\">Modifier</a>";
            echo "<a href=\"?action=supprimerCalendrierJunior&id=" . $UnCalendrierJunior->getId() . "\" class=\"btn-action delete\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer ce match ?');\">Supprimer</a>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUnUtilisateur($UnUtilisateur){
    echo "<h2>" . $UnUtilisateur->getNomUtilisateur(). "<h2>";
}

function afficherTableUtilisateurs($unTableauUtilisateur){
    echo "<h2>Utilisateur</h2>";
}
?>

