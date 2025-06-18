<?php
    $typeActeur = $controleur->getActeur();
    if ($typeActeur != "visiteur") {
        $nomUtilisateur = $_SESSION['utilisateurConnecte'];
        echo "<h2 style='color:red; background-color:#131313; text-align:center'> Hey there  $nomUtilisateur</h2></div>";
    }
?>