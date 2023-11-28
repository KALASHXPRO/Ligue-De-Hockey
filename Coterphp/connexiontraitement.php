<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];


    if ($email == "Administrateurs@gmail.com" && $password == "ProjectW") {

        header("Location: http://localhost:9595/mysql/index.php?db=liguehockeydb&target=db_structure.php&token=edabc83c4524ee1f9637ed24ede4fea0");
        exit();
    }

    header("Location: http://localhost:9595/gestion-d-une-ligue-de-hockey.benjamin_ismail_dave/Coterphp/connexiontraitement.php");
}
?>