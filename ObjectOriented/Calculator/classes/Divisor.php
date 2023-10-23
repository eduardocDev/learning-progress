<?php

class Divisor implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result / $number;
    }
}