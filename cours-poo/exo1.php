<?php

class Person {

    public string $name  ;
    public string $phoneNumber  ;
    public string $emailAdress  ;

    public function purchaseParkingPass(){}

    function __construct(string $monnom,string $tel,string $mail){
        $this->name = $monnom;
        $this->phoneNumber = $tel;
        $this->emailAdress = $mail;
    }
}


$personne = new Person("Liam", "Tel", "Mail");




class Student extends Person {

    public int $studentNumber ;
    public int $averageMark ; 

    public function itEligibleToEnroll(string $studentadmin ):bool{

    }

    public function getSeminarsTaken():int{

    }

    function __construct(int $Studentnbr, int $note){
        $this->studentNumber = $Studentnbr;
        $this->averageMark = $note;
    }


}


$student = new Student("nbr etudiant", "note");









class Professor extends Person{
 public int $salary ;
 public int $staffNumber ; 
 private int $yearsOfService ; 
 public int $numberOfClasses ;


 
 function __construct(int $salaire, int $nbstaff, int $anneeservice, int $nbclasse){
    $this->salary = $salaire;
    $this->staffNumber = $nbstaff;
    $this->yearsofService = $anneeservice;
    $this->numberOfClasses= $nbclasse;
}

}


$student = new Student("salaire", "Staff numero", "Année de service", "Numero de classe");





?>