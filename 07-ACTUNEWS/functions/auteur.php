<?php

/*

Dance ce fichier nous allons définir  quelques fonctions qui seront utiles pour gérer nos auteurs (membres).

-Vérifier l'existence d'un membre dans la base
-Inscrire un membre
-Connecter un membre
-Deconnexion

*/

/**
 * Notre fonction va permettre l'inscription d'un auteur / d'un membre dans la base de données.
 * Elle va nous retourner la fonction true ou 1 (oui) si l'insertion a été faite correctement.
 * Elle va nous retourner la fonction false ou 0 (non) si une erreur est survenue.
 */

function inscription($prenom, $nom, $email, $password) {

    global $db;

    $query = $db->prepare('
        INSERT INTO auteur (prenom, nom, email, password)
            VALUES (:prenom, :nom, :email, :password)
    ');

    $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue('nom', $nom, PDO::PARAM_STR);
    $query->bindValue('email', $email, PDO::PARAM_STR);
    $query->bindValue('password', password_hash($password, PASSEWORD_DEFAULT), PDO::PARAM_STR);

    return $query->execute();

    /**
     * Permet la connexion d'un utilisateur.
     * Le stockage de ses informations en sessions !
     * Retournne true ou 1 (oui) si la connexion est un succès
     * Retourne false ou 0 (non) en cas d'echec de connexion.
     */
    function connexion() {

        global $db;

        $sql = 'SELECT * FROM auteur WHERE email = :email';
        $query = $db- >prepare($sql);
        $query ->bindValue( ':email', $email, PDO::PARAM_STR);
        $query->execute();

        // Récupération de l'auteur dans la base
        $auteur

        // On vérifie si un auteur à bien été trouvé et que dans le même temps, le mot de passe saisie par l'utilisateur dans le formulaire correspond au mot de passe de l'auteur trouvé dans la base de données.
        if ( $auteur && password_verify($password, $auteur['password']) ) {}

    
        // Mettre en session les informations de l'auteur
        $_SESSION['auteur'] = $auteur; // Je stock dans ma session PHP à la clé auteur, mon tableau associatif $auteur.

        return true;
    }

    return false;

}