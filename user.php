<?php

    class User{

        private $email;
        private $name;


        public function __construct($email , $name){
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){
            // echo $this->name . "logged in<br> with new email $this->email" ;
            echo $this->name . "logged in<br> with new email " .$this->email ."<br>" ;
        }

        public function setName($name){
            if(is_string($name) && strlen($name)>1){
                $this->name = $name;
                return "name has been updated to $name<br>";

            }else{
                return 'not a valid name . <br>';
            }

        }

        public function getName(){
            return $this->name;
        }
    

    }

    $userOne = new User('ilyas@gmail.com','ilyas');

    $userOne->login();

    echo $userOne->setName(5);

    echo $userOne->getName();

    



?>