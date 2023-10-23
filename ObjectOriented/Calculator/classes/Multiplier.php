<?php

class Multiplier implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result * $number;
    }
}