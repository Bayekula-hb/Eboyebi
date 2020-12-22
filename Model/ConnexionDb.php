<?php
try {
    $Db = new PDO('mysql:host=localhost;dbname=db_eboyebi;charset=utf8','root', '');
} catch (Exception $Excep) {
    die (' La basse de données ne s\'ouvre pas à cause de : '.$Excep->getMessage());
}