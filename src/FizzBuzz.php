<?php

namespace App;

use App\exception\IsNotIntegerException;

class FizzBuzz
{
    public function getResult($number)
    {
        if(!is_integer($number))
        {
            throw new IsNotIntegerException(); 
        }

        if($this->isDivisibleBy3($number) && $this->isDivisibleBy5($number))
        {
            return 'FizzBuzz';
        }

        if($this->isDivisibleBy3($number))
        {
            return 'Fizz';
        }

        if($this->isDivisibleBy5($number))
        {
            return 'Buzz';
        }

        return $number;
    }

    protected function isDivisibleBy3($number)
    {
        return $number % 3 == 0;
    }

    protected function isDivisibleBy5($number)
    {
        return $number % 5 == 0;
    }
}

?>