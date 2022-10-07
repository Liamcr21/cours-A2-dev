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




class Student extends Person {

    public int $studentNumber ;
    public int $averageMark ; 

    public function itEligibleToEnroll(string ):bool{

    }

    public function getSeminarsTaken():int{

    }


    
}






class Professor extends Person{
 public int $salary ;
 public int $staffNumber ; 
 private int $yearsOfService ; 
 public int $numberOfClasses ;

}





$personne = new Person("Liam", "Tel", "Mail");


?>