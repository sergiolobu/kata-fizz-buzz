<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{

    public function setUp():void
    {
        parent::setUp();
        $this->fizzBuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function return_1_when_print_1()
    {
        //Arrange

        //Act
        $result = $this->fizzBuzz->getResult(1);

        //Asserts
        $this->assertEquals(1,$result);
    }

    /**
     * @test
     */
    public function return_fizz_when_print_number_divisible_by_3()
    {
        //Arrange

        //Act
        $result = $this->fizzBuzz->getResult(3);

        //Asserts
        $this->assertEquals('Fizz',$result);
    }
}

?>