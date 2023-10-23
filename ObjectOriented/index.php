<?php

    require 'Person.php';
    require 'Finance.php';

    class brand {
        public $color;
        public $model;

       function __construct($color,$model) {
            $this->color = $color;
            $this->model = $model;
        }

        function getColor(){
            return $this->color;
        }

        function getModel(){
            return $this->model;
        }
    }


    $toyota = new brand("blue", "corolla");
    $volkswagen = new brand("red", "Polo");
    $honda = new brand("silver", "civic");

    echo $toyota->getColor()."|".$volkswagen->getColor()."|".$honda->getColor();
    echo "<br>";
    echo $toyota->getModel()."|".$volkswagen->getModel()."|".$honda->getModel(); 

    $finance = new Finance("Eduardo",21,"R$ 756.255,65");
    echo "<br>";
    $finance1 = new Finance("Josue",28,"R$ 1.855.255,65");

    echo "<br>";
    echo $finance->getMoney(); 
    echo "<br>";
    echo $finance1->getMoney(); 