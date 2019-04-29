<?php

class Contrat{
    private $id;
    private $nomBabysiter;
    private $prenomBabysiter;
    private $ageBabysite;
    private $nomParent;
    private $prenomParent;
    private $adress;
    private $nomEnfant;
    private $prenomEnfant;
    private $ageEnfant;
    private $dateDebut;



    public function __set( $name, $value ){}
    public function getId(){return $this->id;}
    public function getnomBabysiter(){return $this->nomBabysiter;}
    public function getprenomBabysiter(){return $this->prenomBabysiter;}
    public function getageBabysite(){return $this->ageBabysite;}
    public function getnomParent(){return $this->$nomParent;}
    public function getprenomParent(){return $this->$prenomParent;}
    public function getadress(){return $this->adress;}
    public function getnomEnfant(){return $this->nomEnfant;}
    public function getprenomEnfant(){return $this->prenomEnfant;}
    public function getageEnfant(){return $this->ageEnfant;}
    public function getdateDebut(){return $this->dateDebut;}
}

$appli= new Connexion();
$contrat=$appli->getContrat(1);

?>