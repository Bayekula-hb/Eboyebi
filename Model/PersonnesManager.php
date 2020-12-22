<?php
class PersonnesManager{
    private $_Db;

    public function __construct($Db){
        $this->SetDb =$Db;
    }

    public function Add(Personne $Perso){
        $Query= $this->_Db->prepare('INSERT INTO t_personnes SET PrenomPerso = :Prenom, NomPerso = :Nom,
                                    MailPerso = :Mail, PassPerso = :Pass');
        $Query ->bindValue('Prenom', $Perso->PrenomPerso);
        $Query->bindValue('Nom', $Perso->NamePerso);
        $Query->bindValue('Mail', $Perso->MailPerso);
        $Query->bindValue('Pass', $Perso->PassPerso);
        $Query->execute();
    }
    public function Delette(){

    }
    public function Update(){

    }
    public function Select(){
        
    }

    public function setDb(PDO $Db){
        $this->_Db = $Db;
    }
}