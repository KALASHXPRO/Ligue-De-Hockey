<?php if(!ISSET($controleur)) header("Location: ..\\index.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <style>
        body {
            background: linear-gradient(135deg, #1F4373 0%, #AA1F23 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(31,67,115,0.18);
            padding: 48px 36px 36px 36px;
            max-width: 400px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .login-container h2 {
            color: #1F4373;
            font-size: 2.2rem;
            margin-bottom: 18px;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .login-container p {
            color: #555;
            margin-bottom: 28px;
            font-size: 1.1rem;
            text-align: center;
        }
        .login-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 22px;
        }
        .login-form label {
            font-weight: 600;
            color: #1F4373;
            margin-bottom: 6px;
        }
        .login-form input[type="text"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border-radius: 7px;
            border: 1.5px solid #bbb;
            font-size: 1.1rem;
            background: #f7f7f7;
            transition: border 0.2s;
        }
        .login-form input[type="text"]:focus,
        .login-form input[type="password"]:focus {
            border: 1.5px solid #1F4373;
            outline: none;
        }
        .toggle-password {
            color: #AA1F23;
            font-size: 0.98rem;
            cursor: pointer;
            margin-top: 4px;
            margin-bottom: 0;
            text-align: right;
            user-select: none;
        }
        .login-btn {
            background: #1F4373;
            color: #fff;
            border: none;
            border-radius: 7px;
            padding: 14px 0;
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 1px;
            cursor: pointer;
            margin-top: 10px;
            transition: background 0.2s, transform 0.2s;
            box-shadow: 0 2px 8px rgba(31,67,115,0.10);
        }
        .login-btn:hover {
            background: #AA1F23;
            transform: scale(1.03);
        }
        .login-error {
            color: #AA1F23;
            font-weight: 600;
            margin-bottom: 10px;
            text-align: center;
        }
        @media (max-width: 600px) {
            .login-container {
                padding: 24px 8vw 24px 8vw;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Connexion</h2>
        <p>Merci d'entrer votre nom d'utilisateur et votre mot de passe.</p>
        <?php
            include_once "vues/inclusions/fonctions.inc.php";
            afficherErreurs($controleur->getMessagesErreur());
        ?>
        <form class="login-form" id="loginForm" action="?action=seConnecter" method="post" onsubmit="return validateForm()">
            <div>
                <label for="nom">Nom d'utilisateur</label>
                <input type="text" id="nom" name="nom_utilisateur" placeholder="Nom d'utilisateur">
            </div>
            <div>
                <label for="mot_passe">Mot de passe</label>
                <input type="password" id="mot_passe" name="mot_passe" placeholder="Mot de passe">
                <div class="toggle-password" onclick="togglePassword()">Afficher le mot de passe</div>
            </div>
            <button class="login-btn" type="submit">Se connecter</button>
        </form>
    </div>
    <script>
        function validateForm() {
            var username = document.getElementById("nom").value;
            var password = document.getElementById("mot_passe").value;
            if (username === "") {
                alert("Le nom d'utilisateur est requis !");
                return false;
            }
            if (password === "") {
                alert("Le mot de passe est requis !");
                return false;
            }
            return true;
        }
        function togglePassword() {
            var passwordField = document.getElementById("mot_passe");
            var toggle = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggle.textContent = "Masquer le mot de passe";
            } else {
                passwordField.type = "password";
                toggle.textContent = "Afficher le mot de passe";
            }
        }
    </script>
</body>
</html>