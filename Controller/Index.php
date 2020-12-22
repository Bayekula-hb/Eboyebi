<?php
    require_once('Model/ConnexionDb.php');
    require_once('LoadClass.php');
    spl_autoload_register('LoadClass');

    function Index(){
        $Personne = new Personne();
        require_once('View/Index.php');
    }
    function Cours(){
        require_once('Model/Cours/getCours.php');
        require_once('Model/PersonnesManager.php');
        
        //$Manager = new PersonnesManager($Db);
        require_once('View/Cours/Cours.php');
    }
    function Contact(){
        require_once('View/Contact.php');
    }
    function Apropos(){
        require_once('View/Apropos.php');
    }
    function Login(){
        require_once('View/Login.php');
    }