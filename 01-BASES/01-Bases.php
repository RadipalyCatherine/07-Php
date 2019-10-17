<!--
    Tout d'abord, nous pouvons écrire du HTML dans un fichier ayant l'extension PHP. L'inverse n'est pas possible.
    -->

    <style>
    h2 {
        margin:0;
        font-size: 15px;
        color: red;
    }
</style>

    <h2> Ecriture et Affichage</h2>

<?php

echo 'Bonjour'; // Echo est une instruction qui nous permet d'effectuer un affichage.

echo '<br>'; // Nous pouvons également y mettre du HTML.

echo '<hr><h2>Commentaires</h2>'; // Si vous vous rendez dans le code-source, vous ne verrez pas le PHP; car le langage est interprété!

?>

<strong> Bonjour </strong>

<?= 'Hello World !'; ?> <!-- Le = remplace le echo. -->

<!--
    Il est possible de fermer et ré-ouvrir php
    pour mélanger du code HTML & PHP.
-->

<?php

echo 'Texte'; // Ceci est un commentaire sur une ligne.
echo 'Texte'; /* Ceci est un commentaire sur plusieurs lignes. */
print 'Texte'; #Ceci est un commentaire sur une ligne.

/*
Print est une autre instruction d'affichage.
 Il n'y a pas de différence entre print et echo.
 -------------------------------------------------
 Vous n'êtes pas obligé de fermer PHP avec ' ?> '. 
 Vous pouvez fermer et ouvrir plusieurs fois PHP.
 */

 echo '<hr><h2>Variable PHP : Types / Déclaration / Affection</h2>';

 // Déclaration d'une variable PHP avec le signe $

 $a = 127 ; // Affectation de la valeur 127 dans la variable nommée: a
 $b = 1.5 ; // Affectation de la valeur 1.5 dans la variable nommée: b

 //$nom_de_ma_variable = <ma_valeur...

 echo gettype($a); // Il s'agit d'un Entier: integer
 echo '<br>';
 echo gettype( $b); // Il s'agit d'un nombre à virgule : double

$a = "une chaîne";
$b = "127";

echo '<br>';
echo gettype($a); // Il s'agit d'un string
echo '<br>';
echo gettype($b); // String est equivalent à varchar de MySQL.

$a = true;
$b = false; 

echo'<br>';
echo gettype ($a); // boolean
echo'<br>';
echo gettype ($b); // boolean

/*
NOTA BENE : Nous pouvons appeler une variable 'a2' mais pas
 '2a'. 
 Elle peut contenir des chiffres, 
 mais ne doit pas commencer par un chiffre. /*

?>

/* 
On utilise le point ou la virgule pour concaténer. 
*/

$prenom = 'Catherine';

echo 'Bonjour' . $prenom . '<br>';
echo 'Bonjour' , $prenom , '<br>';

/*

Il est possible de mélanger 


echo "Bonjour $prenom <br>"; // Dans les guillemets, la variable est évaluée.
echo 'Bonjour $prenom <br>'; // Dans les quotes, la variable n'est PAS évaluée ! 

// ------------------------------------------------------------------------------------

echo '<hr><h2>Constante et Constante Magique ! </h2>';

define('IMPOSSIBLE_A_MODIFIER' , Valeur de ma cosntante');
echo IMPOSSIBLE _A_MODIFIER . '<br>';

/*
Par convention, une constante se déclare toujours en MAJUSCULE.
-------------------------------------------------------------------------------------------
Les constantes sont utiles pour sauvegarder vos informations
de connexion à une BDD par exemple.

*/

// -- Les constantes magiques :

echo_FILE_ . '<br>'; // Chemin complet vers mon fichier.
echo_DIR_  . '<br>'; // Chemin vers mon dossier.
echo_LINE_ . '<br>'; // Affiche le numéro de la ligne.

// -------------------------------------------------------------------------------------------

echo '<hr><h2>Les Opérateurs Arithmétiques </h2>';

$a = 10;
$b = 5;

echo $a + $b . '<br>'; // Affiche 15
echo $a - $b . '<br>'; // Affiche 5
echo $a * $b . '<br>'; // Affiche 50
echo $a / $b . '<br>'; // Affiche 2

//-- Opération / Affectation

$a = $a + $b; // Ici, $a vaut 10... donc 10 + 5 = 15
$a += $b; //Ecriture simplifiée Même chose que $a = $a + $b;
$a -= $b; // Même chose que $a = $a -$b ;
$a *= $b; // Même chose que $a = $a * $b ;
$a /= $b; // Même chose que $a = $a / $b ;

$a += 1; // J'incrémente de 1. J'ajoute +1 à ma variable.
$a++; // Même chose que $a +=1; Ecriture simplifiée.
$a--; // Même chose chose que $a -=1; Ecriture simplifiée.

echo '<hr><h2>Structures Conditionnelles (if / else)</h2>';

/*

    Isset & Empty
    empty = test si une variable est égale à 0, est vide ou non définie.
    isset = test uniquement si une variable est définie ou existe.
    */

    /*Je vais déclarer deux variables*/

    $var1 ="test";
    $var2 ="";

    if (empty( $var2 ) ) { // Si $var2 est égale à 0, est vide ou n'existe pas
        echo '0, vide ou non définie<br>';
    } else {
        echo 'Ma variable est définie<br>';
    }

    if (isset( $var2 ) ) { // Si existe $var2 ?
        echo 'var2 existe<br>';
    } else {
  echo 'var2 n\'existe pas !<br>';
    }

    $prenom = "0";
    $nom = "RADIPALY";

    if (isset ($prenom)) echo "Attention, prenom existe !";
    if (empty($prenom)) echo "Attention, vous avez oublié de remplir votre prénom";

    echo '<hr>';

    $a = 2;
    $b = 5;
    $c = 8;

 if ( $a > $b ) { // Si A est supérieur à B
 print "A est bien supérieur à B. <br>";
} else {
    print "non, c'est B qui supérieur à A. <br>";
}

if ($a > $b && $b > $c ) { // Si A est supérieur à B et que dans le même temps B est supérieur à C.

    print "Tout est OK pour les deux conditions. <br>";

}

if ($a == 2 || $b > $c ) { // Si A contient 2 ou que B est supérieur à C.

    print "Tout est OK pour au moins l'une des conditions. <br>";
} else {
    // Aucune des deux conditions sont bonnes
    print "Nous sommes dans le ELSE";
}

/*

NOTA BENE :
Le double égale == permet de vérifier une information
à l'intérieur d'une variable.
*/

if ($a == 10 XOR $b == 6 ) { // Seulement l'une des 2 conditions doit être valide. Mais pas les deux en même temps.
echo 'Ok, condition exclusive.';
}

/*
Forme contracté du <IF...
Une ecriture ternaire, un if ternaire
Le "?" remplace le IF (alors), le ":" remplace le ELSE (sinon)
*/

echo ($a == 10) ? "a est égal à 10<br>" : "a n'est pas égal à 10<br>";

// -- Comparaison

$a = 1;
$b = "1";

if ( $a == $b ) echo "Les deux variables sont égales";
if ( $a === $b) echo "Les deux variables sont strictement égales";

/* 
|    /!\ A NE PAS OUBLIER /!\

= Affectation
== Comparaison des valeurs
=== Comparaison des valeurs et des types
*/

echo '<hr><h2>Condition Switch</h2>';

$couleur = 'bleu';

switch($couleur) {
    case 'bleu' :
    echo 'Vous aimez le bleu';
    break;
    case 'rouge' :
    echo 'Vous aimez le rouge';
    break;
    case 'jaune' :
    echo 'Vous aimez le jaune';
    break;
    case 'vert':
    echo 'Vous aimez le vert';
    break;
    default: // Cas par défaut, on ne rentre dans aucun des cas précédent.
    echo "Vous n'aimez ni le bleu, ni le rouge,...";
    break;
}

/*
EXERCICE :
Pouvez-vous faire la même chose que le switch
... avec des if/else ? est-ce possible ? 
*/

if ($couleur == 'bleu'){
    echo 'Vous aimez le bleu';
}else if ($couleur == 'rouge'){
    echo 'Vous aimez le rouge';
}else if ($couleur == 'jaune'){
    echo 'Vous aimez le jaune';
}else if ($couleur == 'vert'){
    echo 'Vous aimez le vert';
}else {
    echo "Vous aimez ni le bleu ni le rouge ni le jaune ni le vert";
}

// ---------------------------------------------------------------

echo '<hr><h2>Les Fonctions prédéfinies</h2>';

// A regarder : http://overapi.com/php 

/*
 Exemple avec la fonction date() qui permet de 
 renvoyer la date du jour au format souhaité. 
 ---------------------------------------------------------------------
 https://www.php.net/manual/fr/function.date.php
 */

echo '<br>Date : <br>';
print date( 'd/m/Y');
echo '<br>';
print date('Y M d D');

echo '<hr><h2>Les Fonctions prédéfinies : Les String</h2>';

$email1 = "hugo@wf3.fr";
echo strpos( $email1, "@" );

/*
La fonction strpos() indique la position 
du caractère @ dans la chaine. 
On commence à 0. 
*/

$email2 = "hugo";
echo strpos( $email2, "@");
echo '<br>';
var_dump( strpos( $email2, "@") );

/*
Cette ligne ne sort rien, pourtant il y à bien une valeur. FALSE : boolean.
----------------------------------------------------

Avec un var_dump on aperçoit le FALSE si le 
caractère @ n'est pas trouvé.

----------------------------------------------------
var_dump est une instruction d'affichage améliorée 
que l'on utilise régulièrement en phase de développement.
*/


echo '<br>';
var_dump(strpos( $email2, "@"));

/*

strpos() permet de trouver la position 
d'un caractère dans une chaine.

-----------------------------------------------------


En cas de succès il nous retourne un entier.
En cas d'échec il nous retourne la formule suivante : boolean FALSE
*/

/*

Paramètres :
1. La chaine dans laquelle effectuer la recherche
2. Le caractère/ l'information à chercher
*/

$phrase ="Je suis une phrase et j'aime ce que je suis."
echo iconv_strlen( $phrase) . '<br>' ;

/*
iconv_strlen()
--------------------------------------------------------

Valeur de retour :
Succès : int Entier
Echec : boolean FALSE : 0
--------------------------------------------------------
Paramètres :
1.La chaine de caractère pour laquelle nous souhaitons
 connaitre la taille.
*/

$texte = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
Placeat voluptatum nesciunt voluptas repellendus quaerat ut eligendi
 alias recusandae consequatur architecto deserunt fugiat, labore fugit,
  aliquid et omnis tempore eum impedit.";

echo substr( $texte, 0, 50 ) . '... <a href="#">Lire la suite</a>';

/*

substr() Retourne une partie d'une chaine
------------------------------------------------------
Valeur de retour :
Succès : string 
Echec : boolean FALSE

-----------------------------------------------------
Paramètres :
1. La chaîne d'entrée (Celle à couper)
2. Start ; Position de début
3. length : Nb de caractères souhaités
*/

echo '<hr><h2>Les Fonctions Utilisateur</h2>';

/*
Les fonctions qui ne sont pas prédéfinie en PHP
sont déclarés pouis exécuté par l'utilisateur.
-----------------------------------------------------
Autrement dit, vous avez la possibilité de 
créer vos propres fonctions PHP.
-----------------------------------------------------
Réalisons une fonction permettant de tirer un trait
sur la page.
*/

function separator() { // Cette fonction ne reçoit pas d'argument
echo "<br><hr><br>";
}

separator(); // Execution de notre fonction.

/*

    Fonction avec arguments
Les $(variables) arguments sont des paramètres fournis à la fonction.
Ils lui permettent de compléter ou modifier son comportement 
initialement prévu.
*/

function bonjour( $prenom ) {
    return "Bonjour $prenom <br>";
}

// Pour executer la fonction

echo bonjour("Hugo");
echo bonjour("Léna");
echo bonjour("Mélissa");

//-------------------------------------------

separator();

/*
    EXERCICE :
    1. Créer une fonction permettant de calculer la somme de 2 nb.
    2. Créer une fonction permettant de générer des titres h3
    3. Créer une fonction permettant de calculer la TVA 20% (1.2)
    4. Créer une fonction permettant de calculer la TVA plusieurs taux. normal : 20% ou 1.2 | réduit : 5.5% ou 1.055

    5. BONUS : Réaliser une fonction permettant de générer une accroche de X caractères passé paramètres, sans couper de mot.

    6. BONUS : Challenge Réaliser une fonction PHP permettant de
    convertir une chaine en slug. slugify().
*/

CORRECTION

1. Créer une fonction permettant de calculer la somme de 2 nb. 

 function addition( $nb1,$nb2 ) {
    return $nb1 + $nb2;
}

$resultat = addition(130, 15);
echo $resultat;

2. Créer une fonction permettant de générer des titres h3.

echo titre ('Je suis développeur web !!!!');// Il est possible d'executer une fonction avant qu'elle ne soit déclarée dans le code.

function titre ($h3){
    return "<h3> $h3</h3>"; // A partir du 'return' on quitte la fonction.Tout ce qui se trouve après le return n'est pas exécuté.
    echo 'test'; // Ne s'execute pas à cause du return juste avant.
}

3. Créer une fonction permettant de calculer la TVA 20% (1.2)

echo '<h2>'

// EXERCICE : En partant de l'exemple ci-dessus et en utilisant une boucle for; réalisez un select allant de 1 à 31. Correspondant au nombre de jour dans un mois.

echo '<select>';
echo '<option>1</option>';
echo '<option>2</option>';
echo '<option>3</option>';
echo '</select>';

echo '<select>';
for($i = 1 ; $i <= 31 ; $i++) {
    echo "<option>$i</option>";
}
echo '</select>';

separator();

?> <!-- Je ferme PHP donc je suis dans mon HTML -->

<table border="1">
<tr>
<?php
for($i = 0 ; $i <= 9 ; $i++) {
    echo "<td>$i</td>";
}
?>
</tr>
</table>

<!-- Je retourne dans PHP>
<?php

// Même exemple 100% PHP

echo '<table border="1"><tr>';
for($i = 0 ; $i <= 9 ; $i++) {
    echo "<td>$i</td>";
}
echo '</tr></table>';

//----------------------------------------------------------------------

separator();

echo '<h2>Les Tableaux / Array</h2>';

/*

Un array ou un tableau est une variable qui 
contient plusieurs valeurs organisé sous 
forme de "clé -> valeur".
-----------------------------------------
|   0   |   1   |   2   |   3   |   4   |
-----------------------------------------
|   Léna|   Nia |  Angel| Astrid| Meli. |
-----------------------------------------
*/

// -- Déclaration et remplissage d'un tableau indexé
$apprenantes = array('Léna', 'Nia');
$apprenantes = ['Léna','Nia','Angelique','Astrid','Melissa'];

// -- Afficher les valeurs de notre tableau $apprenantes
#echo $apprenantes; // Ne marche pas Array to string conversion
echo $apprenantes[1] . '<br>'; // Nia
echo $apprenantes[2] . '<br>'; // Angélique
echo '$apprenantes est de type : ' .gettype($apprenantes);

/*
Pour afficher la valeur d'une clé d'un tableau
on utilise : monTableau[ cle ];
cle = indice = index = synonymes
*/

echo '<pre>';
# var_dump( $apprenantes);
print_r( $apprenantes );
echo '</pre>';

/*
Les tableaux associatifs :
Les clés ne sont plus numérique, mais sous
forme de string.

------------------------------------------------------
|    prenom   |     nom     |  telephone  |    age   |
------------------------------------------------------
| Catherine   | RADIPALY    |  0690764206 |   26ans  |
------------------------------------------------------    
*/

$contact = [
    // cle          =>          valeur
    'prenom'        =>          'Catherine',
    'nom'           =>          'RADIPALY' ,
    'telephone'     =>          '0690764206',
    'age'           =>          '26ans',
    'adresse'       =>          [
                                                'rue'       => ''         
    ]

];

echo '<h1>Bonjour ' . $contact['prenom']. '' . $contact[ 'nom']
?> 

