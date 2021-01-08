<?php
session_start();
require_once('ConnexionDb.php');
if(!isset($_POST['Inscription'])){
    trigger_error('Le bouton n\'existe pas', E_USER_WARNING);
    header('Location:../index.php'); 
}elseif(!isset($_POST['prenom']) || !isset($_POST['nom']) && !isset($_POST['mail']) || !isset($_POST['pass1']) && !isset($_POST['pass2'])){

    header('Location:../index.php?Page=Login');
}else if($_POST['pass1'] !== $_POST['pass2']){

    header('Location:../index.php?Page=Login');
}
else{
    $Password = password_hash(htmlspecialchars($_POST['pass2']), PASSWORD_DEFAULT);
    $Query = $Db->prepare('INSERT INTO t_personnes(PrenomPerso, NomPerso, MailPerso, PassPerso) VALUES (:Prenom,:Nom,:Mail,:Pass)');
    $Query->execute(array('Prenom'=>htmlspecialchars($_POST['prenom']),
                          'Nom'=>htmlspecialchars($_POST['nom']),
                          'Mail'=>htmlspecialchars($_POST['mail']),
                          'Pass'=>$Password));

    $_SESSION['Prenom'] = htmlspecialchars($_POST['prenom']);
    header('Location:../index.php?Page=Cours');
    exit();
}