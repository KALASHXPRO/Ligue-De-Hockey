<?php
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

function afficherUneEquipe($UneEquipe) {
    echo "<ul>";
    echo "<li>Id :" . $UneEquipe->getId() . "</li>";
    echo "<li>Nom :" . $UneEquipe->getNom() . "</li>";
    echo "</ul>";
}

function afficherTableEquipes($unTableau) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Nom</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableau as $UneEquipe) {
        echo "<tr>";
        echo "<td>" . $UneEquipe->getId() . "</td>";
        echo "<td>" . $UneEquipe->getNom() . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUneEquipe2($UneEquipe2) {
    echo "<ul>";
    echo "<li>Id :" . $UneEquipe2->getId2() . "</li>";
    echo "<li>Nom :" . $UneEquipe2->getNom2() . "</li>";
    echo "</ul>";
}

function afficherTableEquipes2($unTableau2) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Nom</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableau2 as $UneEquipe2) {
        echo "<tr>";
        echo "<td>" . $UneEquipe2->getId2() . "</td>";
        echo "<td>" . $UneEquipe2->getNom2() . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUnResultat($UnResultat) {
    echo "<ul>";
    echo "<li>Id :" . $UnResultat->getScore() . "</li>";
    echo "<li>Nom :" . $UnResultat->getEquipeLocale() . "</li>";
    echo "<li>Id :" . $UnResultat->getEquipeVisiteuse() . "</li>";
    echo "<li>Id :" . $UnResultat->getIdMatch() . "</li>";
    echo "</ul>";
}

function afficherTableResultats($unTableau) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Score</th>";
    echo "<th>Equipe Locale</th>";
    echo "<th>Equipe Visiteuse</th>";
    echo "<th>Id Match</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableau as $UnResultat) {
        echo "<tr>";
        echo "<td>" . $UnResultat->getScore() . "</td>";
        echo "<td>" . $UnResultat->getEquipeLocale() . "</td>";
        echo "<td>" . $UnResultat->getEquipeVisiteuse() . "</td>";
        echo "<td>" . $UnResultat->getIdMatch() . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUnResultat2($UnResultat2) {
    echo "<ul>";
    echo "<li>Id :" . $UnResultat2->getScore2() . "</li>";
    echo "<li>Nom :" . $UnResultat2->getEquipeLocale2() . "</li>";
    echo "<li>Id :" . $UnResultat2->getEquipeVisiteuse2() . "</li>";
    echo "<li>Id :" . $UnResultat2->getIdMatch2() . "</li>";
    echo "</ul>";
}

function afficherTableResultats2($unTableau2) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Score</th>";
    echo "<th>Equipe Locale</th>";
    echo "<th>Equipe Visiteuse</th>";
    echo "<th>Id Match</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableau2 as $UnResultat2) {
        echo "<tr>";
        echo "<td>" . $UnResultat2->getScore2() . "</td>";
        echo "<td>" . $UnResultat2->getEquipeLocale2() . "</td>";
        echo "<td>" . $UnResultat2->getEquipeVisiteuse2() . "</td>";
        echo "<td>" . $UnResultat2->getIdMatch2() . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUnCalendrier($UnCalendrier) {
    echo "<ul>";
    echo "<li>Id :" . $UnCalendrier->getId() . "</li>";
    echo "<li>Nom :" . $UnCalendrier->getDate() . "</li>";
    echo "<li>Id :" . $UnCalendrier->getLieu() . "</li>";
    echo "<li>Id :" . $UnCalendrier->getEquipeLocale() . "</li>";
    echo "<li>Id :" . $UnCalendrier->getEquipeVisiteuse() . "</li>";
    echo "</ul>";
}

function afficherTableCalendriers($unTableau) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Id Match</th>";
    echo "<th>Date Match</th>";
    echo "<th>Lieu Match</th>";
    echo "<th>Equipe Locale</th>";
    echo "<th>Equipe Visiteuse</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableau as $UnCalendrier) {
        echo "<tr>";
        echo "<td>" . $UnCalendrier->getId() . "</td>";
        echo "<td>" . $UnCalendrier->getDate() . "</td>";
        echo "<td>" . $UnCalendrier->getLieu() . "</td>";
        echo "<td>" . $UnCalendrier->getEquipeLocale() . "</td>";
        echo "<td>" . $UnCalendrier->getEquipeVisiteuse() . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

function afficherUnCalendrier2($UnCalendrier2) {
    echo "<ul>";
    echo "<li>Id :" . $UnCalendrier2->getId2() . "</li>";
    echo "<li>Nom :" . $UnCalendrier2->getDate2() . "</li>";
    echo "<li>Id :" . $UnCalendrier2->getLieu2() . "</li>";
    echo "<li>Id :" . $UnCalendrier2->getEquipeLocale2() . "</li>";
    echo "<li>Id :" . $UnCalendrier2->getEquipeVisiteuse2() . "</li>";
    echo "</ul>";
}

function afficherTableCalendriers2($unTableau2) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Id Match</th>";
    echo "<th>Date Match</th>";
    echo "<th>Lieu Match</th>";
    echo "<th>Equipe Locale</th>";
    echo "<th>Equipe Visiteuse</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    foreach ($unTableau2 as $UnCalendrier2) {
        echo "<tr>";
        echo "<td>" . $UnCalendrier2->getId2() . "</td>";
        echo "<td>" . $UnCalendrier2->getDate2() . "</td>";
        echo "<td>" . $UnCalendrier2->getLieu2() . "</td>";
        echo "<td>" . $UnCalendrier2->getEquipeLocale2() . "</td>";
        echo "<td>" . $UnCalendrier2->getEquipeVisiteuse2() . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>

