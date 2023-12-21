<?php if(!ISSET($controleur)) header("Location: ..\index.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disconnect</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "vues/inclusions/user.php"; ?>
    
    <center><div class="main">
        <div class="main__container">
            <div class="main__content">
                <h2>Are you sure you want to disconnect?</h2>

                <form action="?action=seDeconnecter" method="post" id="disconnectForm">
                    <div class="container">
                    <input type="hidden" name="deconnexion" value="oui" />
                            <input class="bouton-formulaire" type="submit" value="Disconnect" /><br />              
                    </div>
                </form>
            </div>
            <div class="main__img--container">
                <img src="images/pic1.svg" alt="pic" id="main__img">
            </div>  
        </div>
    </div></center> 

    <script src="app.js"></script>
</body>
</html>