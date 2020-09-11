<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function return_1_when_print_1()
    {
        //Arrange
        $fizzBuzz = new FizzBuzz();

        //Act
        $result = $fizzBuzz->getResult(1);

        //Asserts
        $this->assertEquals(1,$result);
    }
}

?>