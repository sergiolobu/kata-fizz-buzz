<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;
use App\exception\IsNotIntegerException;

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
    public function return_1_when_print_number_1()
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
    public function return_fizz_when_print_number_3()
    {
        //Arrange

        //Act
        $result = $this->fizzBuzz->getResult(3);

        //Asserts
        $this->assertEquals('Fizz',$result);
    }

    /**
     * @test
     */
    public function return_buzz_when_print_number_5()
    {
        //Arrange

        //Act
        $result = $this->fizzBuzz->getResult(5);

        //Asserts
        $this->assertEquals('Buzz',$result);
    }

    /**
     * @test
     */
    public function return_fizzbuzz_when_print_number_15()
    {
        //Arrange

        //Act
        $result = $this->fizzBuzz->getResult(15);

        //Asserts
        $this->assertEquals('FizzBuzz',$result);
    }

    /**
     * @test
     */
     public function throw_exception_when_not_print_integer()
     {
        //Arrange

        //Act
        $this->expectException(IsNotIntegerException::class);

        //Asserts
        $result = $this->fizzBuzz->getResult('hola');

     }
    
}

?>