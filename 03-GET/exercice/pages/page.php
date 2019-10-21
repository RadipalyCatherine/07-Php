<!-- Mon contenu -->
<main>
<h1>Bienvenue dans cette formation PHP</h1>
    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo omnis laudantium veritatis assumenda cumque labore optio veniam, recusandae nam. Exercitationem placeat perspiciatis incidunt nobis esse quo commodi nisi cupiditate possimus
    </p>
</main>

<!-- Inclusion du header -->
<?php
// Aperçu des données $_GET
print_r($_GET);

// Si $_GET['page'] n'est pas vide.
if (!empty( $_GET['page'])) {
    // Je crée une variable $page
    $page = $_GET['page'];
} else{
    $page = 'accueil';
}

?>
<!-- Afficher les données de $page -->
<h3>Je suis la page <?= $page ?></h3>

<!-- 
    On inclus $page dans notre fichier.
    include './pages/accueil.php';
    include './pages/presentation.php';
-------------------------------------------
Si $page ou $_GET


