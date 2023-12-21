<?php if(!ISSET($controleur)) header("Location: ..\index.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/pageconnexionadmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<?php
            include_once "vues/inclusions/fonctions.inc.php";
            afficherErreurs($controleur->getMessagesErreur());
            ?>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  
                  <div class="mb-md-1 mt-md-1 pb-1">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Veiller vous connectez</h2>
                    <p class="text-white-50 mb-5">Merci d'entrer votre nom et votre mot de passe. </p>
                    
                    <form id="loginForm" action="?action=seConnecter" method="post" onsubmit="return validateForm()">
                    <div class="form-outline form-white mb-4">
                      <input  type="text" id="nom" name="nom_utilisateur" placeholder="Enter username" class="form-control form-control-lg" />
                      <label  for="nom" >Nom</label>
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input type="password" id="mot_passe" name="mot_passe" placeholder="Enter Password" class="form-control form-control-lg" />
                      <label class="form-label" for="mot_passe">Mot de passe</label>
                      <span class="password-toggle" onclick="togglePassword()" >Montrer mot de passe</span><br/>
                    </div>
      
                    <button class="login_button" type="submit" >Confirmer</button>
                    </form>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                      <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                      <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                    </div>
      
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script>
        function validateForm() {
        var username = document.getElementById("nom").value;
        var password = document.getElementById("mot_passe").value;

        if (username === "") {
            alert("Username is required!");
            return false;
        }

        if (password === "") {
            alert("Password is required!");
            return false;
        }

        return true;
    }
    function togglePassword() {
        var passwordField = document.getElementById("mot_passe");
        var passwordToggle = document.querySelector(".password-toggle");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordToggle.textContent = "Hide Password";
        } else {
            passwordField.type = "password";
            passwordToggle.textContent = "Show Password";
        }
    }
      </script>
        <script src="app.js"></script>
      
</body>
</html>