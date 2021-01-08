<?php
require_once('ConnexionDb.php');

if(isset($_POST['pass']) && isset($_POST['login'])){
    $Pass = htmlspecialchars($_POST['pass']);
    $Login = htmlspecialchars($_POST['login']);

    $ListUsers = $Db->query('SELECT PrenomPerso, PassPero FROM t_personnes');

    while($Result = $ListUsers->fetchAll()){
        if($Pass == $Result['PrenomPerso'] && password_verify($Pass, $Result['PassPerso'])){
            // if(password_verify($Pass, $Result['PassPerso'])){
                header('Location: ../Index.php?Page=Cours');
            // }else{
            //     header('Location:../Index.php');
            //     // TextPass();
            // }
        }
    }
    header('Location: ../Index.php?Page=Login');
}
$ListUsers->closeCursor();