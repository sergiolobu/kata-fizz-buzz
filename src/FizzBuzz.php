<?php

namespace App;

class FizzBuzz
{
    public function getResult($number)
    {
        if($number % 3 == 0)
        {
            return 'Fizz';
        }

        return $number;
    }
}

?>