<?php
require_once('ConnexionDb.php');

if(isset($_POST['pass']) && isset($_POST['login'])){
    $ListUsers = $Db->query('SELECT PrenomPerso, PassPero FROM t_personnes');

    while($Resultat = $ListUsers->fetch()){
        if($_POST['pass'] == $Resultat['PassPerso'] && $_POST['login'] == $Resultat['PrenomPerso']){
            header('Location: ../Index.php?Page=Cours');
        }else{
            // header('Location:../Index.php');
        }
    }
}