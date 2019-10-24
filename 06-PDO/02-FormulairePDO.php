<?php

/*
Inclusion de la connexion à ma Base De Données
-----------------------------------------------
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

    /*CREATE TABLE (`contact`)
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `email` varchar(50) NOT NULL,
        `sujet`varchar(40) NOT NULL,
        `message`varchar(80) NOT NULL;

        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    
    INSERT INTO `categorie` (`nom`) 
        VALUES ;

        2
        */

        ?>

     <!DOCTYPE html>
     <html lang="fr">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>Nouveau contact</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     </head>
     <body>
        
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">

                    <h3 class="text-center m-3">
                        Contact
                    </h3>

                    <?= $content ?>

                    <form method="post">

                        <!-- ----------------------- Contact ----------------------- -->
                        
                        <div class="form-group">
                            <select name="contact" id="categorie"
                                class="form-control <?= isset($errors['categorie']) ? 'is-invalid' : '' ?>">
                                <option value="0">
                                </div class="form-group">

                                <div class="form-group">
                            <textarea name="ID" id="Vos identifiant"
                                class="form-control <?= isset($errors['ID']) ? 'is-invalid' : '' ?>"
                                placeholder="Votre ID..."><?= $annonce ?></textarea>
                                <div class="invalid-feedback">
                                    <?= isset($errors['identifiant']) ? $errors['identifiant'] : '' ?>
                                </div>

                                <div class="form-group">
                            <textarea name="ID" id="Votre adresse email"
                                class="form-control <?= isset($errors['email'])? 'is-invalid' : ''?>"
                                placeholder="Votre ID..."><?=$annonce ?></textarea>
                                <div class="invalid-feedback">
                                    <?= isset($errors[ 'adresse email']) ? $errors['adresse email'] : ''?>
                                    </div>

                                    <div class="form-group">
                            <textarea name="ID" id="Votre numéro de téléphone"
                                class="form-control <?= isset($errors['numéro'])? 'is-invalid' : ''?>"
                                placeholder="Votre ID..."><?=$annonce ?></textarea>
                                <div class="invalid-feedback">
                                    <?= isset($errors[ 'numéro de téléphone']) ? $errors['numéro de téléphone'] : ''?>
                                    </div>


                                <option value="0">

                        </div>

                        </body>
