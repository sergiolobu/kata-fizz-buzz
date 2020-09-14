<?php

namespace App;

class FizzBuzz
{
    public function getResult($number)
    {
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