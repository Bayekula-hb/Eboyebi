<?php
try {
    $Db = new PDO('mysql:host=localhost;dbname=eboyebi;charset=utf8','root','');
} catch (Exception $E) {
    die('Echec d\'ouverture de la base de donnée à cause de '.$E->getMessage());
}