<?php

// print_r( $_POST );

// On initialise les variables a null;
// Elles sont null car l'utilisateur n'a pas encore soumis de données.

if ( !empty( $_POST )) { // Si $_POST n'est pas vide.On fait une:

    // Récupération des données POST

    $email   =$_POST['email'];
    $sujet   =$_POST['sujet'];
    $message =$_POST['message'];

    // Je déclare un tableau d'erreurs vide.

    $errors = [];

    // Je fais une vérification de l'email.

    if (empty($email)) {
        $errors['email'] = "Vous avez oubliez votre email.";
    }

    // Je fais une vérification du format de l'email.

    if (!empty($email) && !filter_var( $email, FILTER_VALIDATE_EMAIL)){;

    // Si mon $email n'est pas vide, et que dans le même temps le format de mon email n'est pas correct, je rentre dans la condition.

    $errors['email'] = "Vérifiez le format de votre email.";
}

// Je fais une vérification du sujet (A savoir si il n'est pas vide) en utilisant la formule suivante: 

if (!empty($sujet)){
    $errors['sujet'] = "Vous avez oubliez votre sujet.";
}

// Je fais une vérification du message (A savoir si le contenu est supérieur à 15 caractères) en utilisant la formule suivante: 

if (strlen($message) < 15){
$errors['message'] = "Le message est trop court. 15 caractères minimum.";
}

// Aperçu de $errors
print_r( $errors );

if (empty($errors)) {
    // Si mon tableau d'erreurs après toutes les vérifications est vide... Alors il n'y a pas eu d'erreurs et je peux procéder à la suite de mon traitement... Sauvegarde en Basse De Données, Envoi de mail...
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <title>Formulaire PHP</title>
</head>
<body>
    <h1>Formulaire 3</h1>

    <!-- 
	1. Créer un Formulaire de Contact en utilisant Bootstrap avec les champs suivants : email, sujet, message.
-->

<!-- nom -->
        <label for="nom">nom</label>
        <input type="nom" id="nom" name="nom"
        placeholder="Saisissez votre nom"><br>

<!-- Champ email -->
<div class="form-group">
        <label for="email">adresse email</label>
        <input type="email"
        class="form-control <?= isset($errors['email']) ? 'is-invalid': '' ?>"
         id="email" name= "email"
         value="<?= $email ?>"
        placeholder="Saisissez votre email"><br>
        <div class="invalid-feedback">
        <?= isset($errors['email']) ? $errors['email']: ''?>
        </div>
        </div>

<!-- Champ sujet -->
<div class="form-group">
        <label for="sujet">Sujet</label>
        <input type="text"
        value= "<?= $sujet ?>"
        class="form-control" <?= isset ($errors['sujet'])?>
         id="sujet" name="sujet"
        placeholder="Votre sujet"><br>
        <div class="">
        </div>
</div>

<!-- Champ message -->
<div class= "form-group">
        <label for="message">Message</label>
<textarea
placeholder="Saisissez votre message"><br>
</div>

<!-- Bouton Submit -->
<div>
<button type= "submit" class="btn btn-primary">
</button>
</div>
</body>
