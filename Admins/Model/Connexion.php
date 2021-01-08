<?php
require_once('ConnexionDb.php');
// if($_POST['g-recaptcha-response']){

// }else{
//     throw("Erreur sur recaptcha");
// }
if(isset($_POST['pass']) && isset($_POST['login'])){
    $Pass = htmlspecialchars($_POST['pass']);
    $Login = htmlspecialchars($_POST['login']);

    $ListAdmins = $Db->query('SELECT LoginAdmins, PassAdmins FROM t_admins');

    while($Resultat = $ListAdmins->fetch()){
        if($Pass == $Resultat['PassAdmins'] && $Login== $Resultat['LoginAdmins']){
            header('Location: ../Index.php?Page=Cours');
        }
    }
}
else{
header('Location:../Index.php');
}