<?php
//Dossier dans lequel est situé le fichier.
//var_dump( __DIR__ );

/*
    include_once permet d'inclure le fichier une 
    seule et UNIQUE fois. si je réécris include_once,
    il ne sera pas inclus.
    -------------------------------------------------
    include permet d'inclure le fichier autant de fois
    que souhaité. 

*/

include_once 'a.php';
include 'a.php';
include 'a.php';
include_once 'a.php';//Na s'affichera pas 
#include 'c.php' ; // warning : include(): Failed opening 'c.php'  


require 'b.php';
require_once 'b.php'; //Ne s'affiche pas ... 
require_once 'b.php'; //Ne s'affiche pas ... 

#require_once 'c.php';//Fatal error : require_once()
echo 'RESTE DU SITE ...';

/*
    include : génère un warning, le script continue= normalement
    requiere : génère une fatale error, le script s'arrete.

*/

