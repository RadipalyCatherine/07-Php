<?php
    $categories = ['Faits divers','Politique', 'Economie', 'Culture', 'Sport','Dans le monde'];

    $categories = getCategories();
    //Si un auteur est en session, alors $auteur prendra comme valeur 

// Récupération de nos fonctions globales

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Actunews | Premier site d'actualité en France</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<!-- Menu du site -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ActuNews | Premier site d'actualité en France</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Accueil <span class="sr-only">(current)</span>
        </a>
    </div>
  </div>
</nav>
<!-- Fin du Menu du site -->


        <!-- Les catégories du site -->
        <?php foreach($categories as $categories) { ?>
          <a class="nav-item nav-link" href="#">
          <?= $categories; // echo du nom de la categorie ?>
        </a>
     <?php } // Fin du foreach sur $categories ?>
     <a class="nav-item btn btn-outline-primary mx-2 " href="#">
        Connexion
     </a>
     <a class="nav-item btn btn-outline-primary mx-2 " href="#">
        Inscription
      </a>
  </div>
  </div>
</nav>
<!-- Fin du Menu du site -->

</body>
</html>
