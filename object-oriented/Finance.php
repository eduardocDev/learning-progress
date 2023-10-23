<?php

//the class finance extends the class person, we create a construct with some atributes and return in the function
//getMoney the data colected by construct, the use of atributes like $name and $age is possible
//because it's public in Person, alredy in the next example you will see the difference between
//public, protected and private, and importance of it.
    class finance extends person {

        private $money;

        function __construct($name,$age,$money){
            $this->name=$name;
            $this->age=$age;
            $this->money = $money;
        }
        function getMoney(){
            return "My name is ".$this->name." I have ".$this->age." Years old and my Account Have: ".$this->money;
        }

    }