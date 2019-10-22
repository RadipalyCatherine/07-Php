<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire PHP</title>
</head>
<body>
    <h1>Formulaire 2</h1>

    <!-- 
	1. Créer un formulaire d'inscription avec les champs suivants : 
    -prenom 
    -nom 
    -email 
    -mot de passe
-->

<!-- Prenom -->
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom"
        placeholder="Saisissez votre prénom"><br>

<!-- Nom -->
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom"
        placeholder="Saisissez votre nom"><br>

<!-- Email -->
        <label for="email">Adresse email</label>
        <input type="email" id="email" name= "email"
        placeholder="Saisissez votre email"><br>

<!-- Mot de passe -->
        <label for="mot de passe">Mot de passe</label>
        <input type="mot de passe" id
        placeholder="Saisissez votre mot de passe"><br>

<button type="submit">Envoyez</button>


<!--
	2. Afficher à l'aide de $_POST les informations
sur la page.
-->

