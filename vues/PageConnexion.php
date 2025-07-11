<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="pageconnexionadmin.css">
    <link rel="stylesheet" href="css/pageconnexionadmin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                  
                  <div class="mb-md-1 mt-md-1 pb-1">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Veuillez vous connecter</h2>
                    <p class="text-white-50 mb-5">Merci d'entrer votre email et votre mot de passe.</p>
                    <form action="/Coterphp/connexiontraitement.php" method="post">
                    <div class="form-outline form-white mb-4">
                      <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg" />
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>
      
                    <div class="form-outline form-white mb-4">
                      <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg" />
                      <label class="form-label" for="typePasswordX">Mot de passe</label>
                    </div>
      
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Connexion</button>
      
                  </div>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>