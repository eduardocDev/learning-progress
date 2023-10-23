<?php

class Subtractor implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result - $number;
    }
}