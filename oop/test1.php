<?php
    class student {

        private $grade;
        private $subject;

        ///getters
        public function getGrade ()
        {
            return $this->grade;
        }

        public function getsubject ()
        {
            return $this->subject;
        }

        ///setters
        public function setGrade ($grade)
        {
            $this->grade = $grade;
        }

        public function setSubject ($subject)
        {
            $this->subject = $subject;
        }

        public function displayInfo(){
            echo $this->$getSubject() . "is my lowest with over a" . $this->$getGrade() "for my final grade. <br>";
    }

}

    $pupil = new student();
    $pupil ->setGrade(90);
    $pupil->setSubject("Keila");
    $pupil-> displayInfo();

    /*
    class Person extends Student {
        
        public function_construct (private $name){

        }

        public function getName ()
        {
            return $this->name;
        }

        public function printInfo (){
            echo  $this->$getName()."is studying for".$this->$getSubject() "." <br>;
        }

        public function displayInfo(){
            echo $this->$getSubject()."is very studious." <br>;
        }





    }
    */




