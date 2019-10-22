<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire PHP</title>
</head>

<?php

session_start(); // Permet de démarrer une session PHP.
var_dump($_SESSION);
echo '<pre>';

/*
$_SESSION est une superglobale comme $_POST ou $_GET.
Je vais donc travailler avec un tableau (array).
*/

$_SESSION['prenom'] = "Catherine";
$_SESSION['nom'] = "Radipaly";
$_SESSION['poste'] = "Assistante informatique";

unset( $_SESSION['poste']); // Permet de supprimer une donnée dans la session.

/* 
Pour détruire totalement la session, exemple : pour déconnecter un utilisateur/ vider son panier...
On 

session_destroy();

