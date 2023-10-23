<?php

require_once 'init.php';

$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(34029290,28128128);//62157418

$c->setOperation(new Subtractor);
$c->calculate(20000000);//42157418

$c->setOperation(new Multiplier);
$c->calculate(2); //84314836

$c->setOperation(new Divisor);
$c->calculate(4);//2107809


echo $c->getResult();