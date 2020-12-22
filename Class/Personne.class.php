<?php
class Personne{
    private $_IdPerso;
    private $_PrenomPerso;
    private $_NamePerso;
    private $_MailPerso;
    private $_PassPerso;

    public function __construct(){      
    }
    // public function hydrate(array $donnees){
    //     foreach ($donnees as $key => $value){
    //         // On récupère le nom du setter correspondant à l'attribut.
    //         $method = 'set'.ucfirst($key);
    //         // Si le setter correspondant existe.
    //         if (method_exists($this, $method)){
    //             // On appelle le setter.
    //             $this->$method($value);
    //         }
    //     }
    // }
    //Methode hydrate
    public function hydrate(array $Data){
        if(isset($Data['Id_Personne'])){
            $this->setIdPerso($Data['Id_Personne']);
        }
        if(isset($Data['Prenom_Personne'])){
            $this->setPrenomPerso($Data['Prenom_Personne']);
        }
        if(isset($Data['Nom_Personne'])){
            $this->setNamePerso($Data['Nom_Personne']);
        }
        if(isset($Data['Mail_Personne'])){
            $this->setMailPerso($Data['Mail_Personne']);
        }
        if(isset($Data['Pass'])){
            $this->setPassPerso($Data['Pass']);
        }
    }

    public function IdPerso(){
        return $this->_IdPerso;  
    }
    public function PrenomPerso(){
        return $this->_PrenomPerso;
    }
    public function NamePerso(){
        return $this->_NamePerso;
    }
    public function MailPerso(){
        return $this->_MailPerso;
    }
    public function PassPerso(){
        return $this->_PassPerso;
    }

    public function setIdPerso($Id){
        if(is_int($Id) && $Id >= 0){
            $this->_IdPerso = $Id;
        }
    }
    public function setPrenomPerso($Prenom){
        if(is_string($Prenom)){
            $this->_PrenomPerso = $Prenom;
        }
    }
    public function setNamePerso($Name){
        if(is_string($Name)){
            $this->_NamePerso = $Name;
        }
    }
    public function setMailPerso($Mail){
        if(is_string($Mail)){
            $this->_MailPerso = $Mail;
        }
    }
    public function setPassPerso($Pass){
        if(is_string($Pass)){
            $this->_PassPerso = $Pass;
        }
    }
}