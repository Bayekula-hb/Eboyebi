<?php
require_once('ConnexionDb.php');
if(isset($_POST['Mail'])){
    $Query = $Db->prepare('INSERT INTO t_newsletters(AdresseMail) VALUES (:Mail)');
    $Query->execute(array('Mail'=>$_POST['Mail']));
}

header('Location:../index.php?Page=Index');