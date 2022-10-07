<?php

class Person {
    public string $name ;
    public string $phoneNumber ;
    public string $emailAdress ;


    public function purchaseParkingPass(){

    }

    public function __construct(string $monNom, string $monNumeroTel, string $monAdresseMail){
        $this->name = $monNom;
        $this->phoneNumber = $monNumeroTel;
        $this->emailAdress = $monAdresseMail;
    }

}

$unePersonne = new Person("liam","tel","mail");

print_r($unePersonne);

class Student extends Person {
    public int $studentNumber ;
    public int $averageMark ;

    public function isEligibleToEnroll(string $uneChaine):bool{
        return false;
    }

    public function getSeminars():int{

    }

    public function __construct(string $monNom, string $monNumeroTel, string $monAdresseMail, int $monNumEtudiant, int $noteMoyenne){
        parent::__construct($monNom, $monNumeroTel, $monAdresseMail);
        $this->studentNumber = $monNumEtudiant;
        $this->averageMark = $noteMoyenne;
    }
}


$unEtudiant = new Student("liam","0615458999","mailliamàgmail.com",100,19);

print_r($unEtudiant);


class Professor extends Person {
    public int $salary ;
    protected int $staffNumber ;
    private int $yearsOfService ; 
    public int $numberOfClasses ;

    public function __construct(string $monNom, string $monNumeroTel, string $monAdresseMail,
                                 int $monSalaire, int $monNumProf, int $monAnneeDeService, int $monNombreDeClasse){
        parent::__construct($monNom, $monNumeroTel, $monAdresseMail);
        $this->salary = $monSalaire ; 
        $this->staffNumber = $monNumProf ;
        $this->yearsOfService = $monAnneeDeService ;
        $this->numberOfClasses = $monNombreDeClasse ;
    }
}


$unProfesseur = new Professor("FLorian","0678954236","florian@gmail.com",9000,4,2022,2);


print_r($unProfesseur);

class Address {
    public string $street ;
    public string $city ;
    public string $state ;
    public int $postalCode ;
    public string $country ;

    public function valide():bool{
        return false ;
    }

    public function outputAsLabel():string{

    }

    public function __construct(string $rue, string $ville, string $etat, int $codePostal, string $pays){
        $this->street = $rue;
        $this->city = $ville ;
        $this->state = $etat ;
        $this->postalCode = $codePostal ;
        $this->country = $pays ;
    }

}

$uneAdresse = new Address("20 rue gay lussac","Pont de l'arche","Eure",27340,"France");

print_r($uneAdresse);