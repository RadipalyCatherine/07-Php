<?php

/*
    OBJECTIF : Afficher dans un tableau HTML <table>, <tr>, <td>
    les demandes de contacts reçu depuis le formulaire 02.

    CONSIGNE : 
    1. Récupérer les demandes de contacts depuis la base de données.
    2. Afficher dans un tableau HTML à l'aide d'une boucle les demandes reçus.
    3. BONUS : Ajouter un bouton permettant de supprimer un message.

    -----------------------------------------------------
    |   ID   |  EMAIL  |  SUJET  |  MESSAGE  |  ACTION  |
    -----------------------------------------------------
    |   1    | ..@x.xx | deman...| un mess...|    X     |
    |   2    | ..@x.xx | deman...| un mess...|    X     |
    |   3    | ..@x.xx | deman...| un mess...|    X     |

*/

$query = $db>prepare('SELECT * FROM formulaire2.php 

        WHERE id = "prenom"; "nom"; "email". ');

$query->bindValue(':id', $idArticle, PDO::PARAM_INT); 

$query->execute(); 
$article = $query->fetch(); // Je récupère le résultat

echo '<hr>';
echo '<pre>';
    print_r($id);
    print_r($article['titre']);
echo '</pre>';


/*
    OBJECTIF : Afficher dans un tableau HTML <table>, <tr>, <td>
    les demandes de contacts reçu depuis le formulaire 02.

    CONSIGNE : 
    1. Récupérer les demandes de contacts depuis la base de données.
    2. Afficher dans un tableau HTML à l'aide d'une boucle les demandes reçues.
    3. BONUS : Ajouter un bouton permettant de supprimer un message.

    -----------------------------------------------------
    |   ID   |  EMAIL  |  SUJET  |  MESSAGE  |  ACTION  |
    -----------------------------------------------------
    |   1    | ..@x.xx | deman...| un mess...|    X     |
    |   2    | ..@x.xx | deman...| un mess...|    X     |
    |   3    | ..@x.xx | deman...| un mess...|    X     |

*/

// Inclusion de la configuration de la base de donnée.
require_once "config/database.php";

// Récupération des données de la table contact.
$query = $db->query('SELECT * FROM contact'); 

$contacts = $query->fetchAll();

echo '<pre>';
print_r ($contacts);
echo '</pre>';
 

// Afficher dans un tableau HTML à l'aide d'une boucle les demandes reçus.
