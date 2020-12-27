<?php
require_once('ConnexionDb.php');
if(!isset($_POST['Inscription'])){
    trigger_error('Le bouton n\'existe pas', E_USER_WARNING);
    header('Location:../index.php'); 
}elseif(!isset($_POST['prenom']) || !isset($_POST['nom']) && !isset($_POST['mail']) || !isset($_POST['pass1']) && !isset($_POST['pass2'])){
    
    echo ('Veuillez saisir les données dans tous les champs');
    header('Location:../index.php?Page=Login');
    exit();
}else if($_POST['pass1'] !== $_POST['pass2']){
    echo('Le deux mot de passe sont different');
    header('Location:../index.php?Page=Login');
}
else{
    // $Query = $Db->prepare('INSERT INTO t_personnes SET Prenom_Personne = :Prenom, Nom_Personne = :Nom,
    //                       Mail_Personne = :Mail, Pass = :Pass');
    //     $Query ->bindValue('Prenom',$_POST['prenom']);
    //     $Query->bindValue('Nom',$_POST['nom']);
    //     $Query->bindValue('Mail',$_POST['mail']);
    //     $Query->bindValue('Pass',password_hash($_POST['pass2'],$PASSWORD_DEFAULT));
    //     $Query->execute();
    $Query = $Db ->prepare('INSERT INTO t_personnes(PrenomPerso, NomPerso, MailPerso, PassPerso) VALUES (:Prenom,:Nom,:Mail,:Pass)');
    $Query->execute(array('Prenom'=>$_POST['prenom'],
                          'Nom'=>$_POST['nom'],
                          'Mail'=>$_POST['mail'],
                          'Pass'=>password_hash($_POST['pass2'],$PASSWORD_DEFAULT)));
    // $Query->bindValue('Prenom',$_POST['prenom']);
    // $Query->bindValue('Nom',$_POST['nom']);
    // $Query->bindValue('Mail',$_POST['mail']);
    // $Query->bindValue('Pass',password_hash($_POST['pass2'],$PASSWORD_DEFAULT));
    // $Query->execute();
    // ));
    
    header('Location:../index.php?Page=Cours');
    exit();
}