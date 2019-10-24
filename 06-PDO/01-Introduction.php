<?php

/*
    1. Créer une base de donnée : actunews
    2. Créer les tables suivantes :

    - categorie - (id), nom
    - auteur -> (id), prenom, nom, email, password
    - article (id), titre, contenu, image, date_creation,
        categorie_id (lien avec la table categorie),
        auteur_id (lien avec la table auteur).

*/

$categorie = [
    // cle      => valeur
    'id'    => '74445882255452',
    'nom'       => 'Varquez',
];

$auteur = [
    'id'    => '74445882255452',
    'nom'       => 'Varquez',
    'prenom' => 'Francisco',
    'email' => 'varquezfrancisco@gmail.com',
    'password' => 'wanted',
    ];

$article = [
    'id'
];


# --------------------- AUTEUR --------------------- #

CREATE TABLE `auteur`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `prenom` varchar(80) NOT NULL,
    `nom` varchar(80) NOT NULL,
    `email` varchar(80) NOT NULL,
    `password` varchar(256) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `auteur` (`prenom`, `nom`, `email`, `password`) 
    VALUES ('Hugo', 'LIEGEARD', 'hugo@actu.news', 'actunews');

# --------------------- ARTICLE --------------------- #

CREATE TABLE `article` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `titre` varchar(256) NOT NULL,
    `contenu` text NOT NULL,
    `image` varchar(256) NOT NULL,
    `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `categorie_id` int(11) NOT NULL,
    `auteur_id` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `article` ADD FOREIGN KEY (`categorie_id`)
    REFERENCES `categorie` (`id`);
    
ALTER TABLE `article` ADD FOREIGN KEY (`auteur_id`)
    REFERENCES `auteur` (`id`);    
    
# -------------------------------------------------------#

/*
// Mise en place de la connexion avec la BDD
// Pour connecter PHP et MySQL on utilisera une librairie: PDO
// PDO me permettra d'effectuer des opérations CRUD (Create Read Update Delete) sur ma base de données.

// Les arguments: on aura en premier le serveur + la Base De Données, 
//ensuite en second lieu les identifiants et enfin pour terminer le mot de passe. 
En shématisant cela donne ça (1 (serveur +bdd), 2 identifiant, 3 mot de passe).
*/

//$db = new PDO('mysql:host=localhost;dbname=actunews', 'root','');

/*
*/

try {
    $db = new PDO('mysql:host=localhost;dbname=actunews' 'root', '');

    // En environnement de développement on active les erreurs SQL.
    // https://

    try {

        $db = new PDO('mysql:host=localhost;dbname=actunews', 'root', '');
    
        // En environnement de développement on active les erreurs SQL.
        // https://www.php.net/manual/fr/pdo.error-handling.php
        // PDO::ERRMODE_SILENT : N'affiche pas les erreurs SQL. (prod)
        // PDO::ERRMODE_WARNING : Affiche l'erreur sans couper le script. (dev)
        // PDO::ERRMODE_EXCEPTION : Affiche l'erreur et stop le script.
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
        // Comment je souhaite que PDO me retourne les informations
        // https://www.php.net/manual/fr/pdostatement.fetch.php
        // PDO::FETCH_ASSOC : Tableau Associatif
        // PDO::FETCH_NUM : Tableau Indexé
        // PDO::FETCH_OBJ : Un Objet Anonyme
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    } catch (PDOException $e) {
    
        print "Erreur !: " . $e->getMessage() . "<br/>";
        // header('Location: https://google.fr/search?q=' . $e->getMessage() );
        die();
        
    }
    
    // Dans la vrai vie, pour mes projets, j'aurais au final le code suivant :
    
    try {
        $db = new PDO('mysql:host=localhost;dbname=actunews', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

 }catch (PDOException $e) {

    print "Erreur !: " . $e ->getMessage() . "<br/>";
    // header( 'Location: https://google.fr/search?q='  . $e->getMessage() );
    die();


 }


 var_dump($db);

 #-----------------------------INSERER

 /*
        Avec $db->prepare() je peux préparer ma requête avant de l'exécuter.
        Ainsi, je peux faire des vérifications préalablement.
*/
$query = $db->prepare('
INSERT INTO `auteur` (`prenom`, `nom`, `email`,`password`)
VALUES (:prenom, :nom, :email, :password);
');

/* 
bindValue va me permettre d'associer une valeur à chaque paramètre.
PDO::PARAM_STR : représente une valeur VARCHAR ou texte en SQL.
Cela me permet de m'assurer du type de donnée insérer dans ma base. 
Il existe d'autres types :
-PDO::PARAM_BOOL ;
-PDO::PARAM_NULL ;
-PDO::PARAM_INT  .

*/

$query->bindValue(':prenom', 'Catherine', PDO::PARAM_STR);
$query->bindValue(':nom', 'Radipaly', PDO::PARAM_STR);
$query->bindValue(':email', 'radipalycatherine@gmail.com', PDO::PARAM_STR);
$query->bindValue(':password', 'actunews', PDO::PARAM_STR);

if ($query ->execute()) {

    // Traitement en cas de succès
    // Envoi d'un email... 
    // Envoi d'une notification...

};

/*
Permet de connaitre le dernier ID a avoir été inséré dans la base de données.
*/
$idAuteur = $db->lastInsertId();
var_dump($idAuteur);

/*
EXERCICE:
A. Avec l'aide d'une requête préparé, insérer la catégorie "Sciences". 
B. Avec l'aide d'une requête préparé, insérer un article dans la catégorie Politique de l'auteur de votre choix. 

*/

A. 

CREATE TABLE `Sciences`(
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `prenom` varchar(80) NOT NULL,
    `nom` varchar(80) NOT NULL,
    `email` varchar(80) NOT NULL,
    `password` varchar(256) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

$query = $db->prepare('
INSERT INTO `auteur` (`prenom`, `nom`, `email`,`password`)
VALUES (:prenom, :nom, :email, :password);
');


B.

$query =$db->prepare('
INSERT INTO `auteur` (`prenom`, `nom`, `email`, `password`) 
    VALUES ('Hugo', 'LIEGEARD', 'hugo@actu.news', 'actunews');
    ');

$query =$db->prepare('
INSERT INTO `Politique` (`titre`, `article`,`auteur`)
    VALUES ('Mr LUREL devient a nouveau Président de la Région Guadeloupe', 'article', 'Catherine Radipaly pour FA Guadeloupe');
    ');


// Pour plus de simplicité, utilisons une boucle
echo '<hr>'

$query = $db->query('SELECT * FROM categorie');
$categories = $query->fetchALL();

/*
J'obtiens ici, un tableau indexé à deux dimensions, avec pour chaque index,
 un tableau associatif de catégories.
*/

echo '<pre>';
print_r( $categories );
print_r( $categories[2]['nom']);
echo '</pre>';

/*
EXERCICE I: Parcourir tous les articles du fetchALL avec une boucle foreach(). Vous afficherez le titre de chaque article dans un <h3>.
*/


/* 
EXERCICE II: Parcourir tous les articles du fetch() avec une boucle while(). Vous afficherez le titre de chaque article dans un <h3>. 
*/ 

//--------------Avec While--------------//
echo '<hr>';

/*
Avec la boucle FETCH, il n'y a pas un tableau avec tous les enregistrements. Mais, un tableau PAR enregistrement.Soit un tableau associatif
 par article. 
 --------------------------------------------------------------------------------------------------------------------------------------
 Avec la boucle FOREACH, j'aurais un tableau qui contiendra tous mes enregistrements.
 --------------------------------------------------------------------------------------------------------------------------------------
 MEMO :
 -Votre requête retourne plusieurs résultats : UNE BOUCLE ! 
 -Votre requête ne doit sortir qu'un unique résultat : PAS DE BOUCLE 
 -Votre requête ne sort qu'un résultat, mais peut potentiellement en sortir plusieurs: UNE BOUCLE ! 
 --------------------------------------------------------------------------------------------------------------------------------------
 */

Correction

 /*
    On peux s'appuyer sur les données transmisent dans l'URL ($_GET)
    pour récupérer des informations dans la base de données.
*/
// print_r( $_GET['id'] );
$idArticle = isset($_GET['id']) ? $_GET['id'] : 0;

$query = $db->prepare('
    SELECT * FROM article
        WHERE id = :id
'); // :id est un paramètre.

$query->bindValue(':id', $idArticle, PDO::PARAM_INT); // On s'assure que l'ID est bien un entier.

$query->execute(); // J'execute ma requête
$article = $query->fetch(); // Je récupère le résultat

echo '<hr>';
echo '<pre>';
    print_r($article);
    print_r($article['titre']);
echo '</pre>';

Correction

<?php

    /*
        Inclusion de la connexion à ma BDD.
        ------------------------------------
        Grâce au require_once, ma variable $db
        est maintenant disponible dans cette page.
        Je peux donc utiliser $db pour accéder à
        ma base de données.
    */
    require_once 'config/database.php';

    /*
        OBJECTIF : Réaliser, Valider et Insérer les données
        d'un formulaire.

        CONSIGNE :
            1. Créer une BDD 'contact' permettant de stocker
            les informations d'un formulaire :
                - id
                - email
                - sujet
                - message

            2. Créer un formulaire bootstrap permettant la saisie
            de ces champs.

            3. A la soumission du formulaire, vérifiez les données :
                - Tous les champs sont obligatoire ;
                - Vérifier le format du champ 'email' ;
                - Le 'message' doit avoir 15 caractères minimum.

            4. Insérer les données vérifiées dans votre BDD.

            BONUS : Afficher un message de confirmation / d'erreur
            à l'utilisateur grâce à une alerte bootstrap.
    */

    // Initialisation des variables
            $email = $sujet = $message =null;
    
            //Si $_POST n'est pas vide et si le formulaire est soumis
             
            if(!empty($_POST)) {

                // Affectation des données POST dans des variables 
                foreach ($_POST as $cle => $valeur) {
                    $$cle=$valeur;
                } 
            
                // Déclaration du tableau vide
                $errors = [];
            
                // Vérification                
                if(empty($email)) {
                    $errors['email'] = "Vous avez oubliez l'email.";
                }

                // Vérification du format de l'email
                if ( !empty($email) && !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {

                    // Si mon email n'est pas vide, et que dans le même temps le format de mon email n'est pas correct, je rentre dans la condition.
                    $errors['email'] = "Vérifiez le format de votre email.";
                }
                
                if(empty($sujet)) {
                    $errors['sujet'] = "Vous avez oubliez le sujet.";
                }
            
                //- Le 'message' doit avoir 15 caractères minimum.
                // Vérification du message ( Supérieur a 15 caractères )

                if ( strlen( $message ) < 15 ) {
                    $errors['message'] = "Le message est trop court. 15 caractères minimum.";
                }
                   
                var_dump($errors);
            }

    ?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulaire PDO</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="container">
                <div class="jumbotron"><h1>Formulaire PDO<h1></div>    
                <form method="post" action="">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="email" 
                            name="email"
                            placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="sujet">Sujet</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="sujet" 
                            name="sujet" 
                            placeholder="Sujet...">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea 
                            class="form-control" 
                            id="message" 
                            name="message" 
                            rows="4"
                            placeholder="Votre message..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-lg">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
    <style>
        h1 {text-align : center; color: #c286d1;}
        button {background-color:#c286d1 !important; color:white !important;}
        button:hover {background-color: #ffffff !important; border-color:#c286d1 !important; color:#c286d1 !important;}
    </style>
    </body>
    </html>

    

    




