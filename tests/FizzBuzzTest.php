<?php

/**
 * FizzBuzz unit test (php testing bootcamp)
 *
 * Iterate through a set of integers (usually 1 to 25)
 * On multiple of 3, return Fizz
 * On multiple of 5, return Buzz
 * On multiple of both, return FizzBuz
 * Otherwise, return the integer
 */

require_once dirname(__DIR__) . "/vendor/rmjr/FizzBuzz.php";

class FixxBuzTest extends PHPUnit_Framework_TestCase
{

	//this is a data provider.
	public function fizzBuzzProvider() {
		return array(
				array('Fizz', 3),
				array('Buzz', 5),
				array('FizzBuzz', 15),
				array(7, 7)
			);
	}

	/**
	 * This test method uses the sample fizzBuzz data provider
	 * 
	 * @test
	 * @dataprovider fizzBuzzProvider
	 */
	public function fizzBuzzScenarios($expected, $testvalue) {
		$testFizzBuzz = new FizzBuzz();
		$response = $testFizzBuzz->evaluate($testValue);
		$this->assertEquals($expected, 
						 	$response, 
						 	'Did not get ' . $expected . ' as expected: ' . $response);
	}

	
	public function testFizz() {

		//create a FizzBuzz Object
		$testFizzBuzz = new FizzBuzz();

		//pass in a vlalue that should return Fizz
		$expected = 'Fizz';
		$response = $testFizzBuzz->evaluate(3);

		//assert that you got the correct response.
		$this->assertEquals($expected, 
							$response, 
							'Did not get Fizz as expected');

	}


	public function testBuzz() {
		$testFizzBuzz = new FizzBuzz();
		$expected = 'Buzz';
		$response = $testFizzBuzz->evaluate(5);
		$this->assertEquals($expected, 
						 	$response, 
						 	'Did not get Buzz as expected: ' . $response);
	}


	public function testFizzBuzz() {
		$testFizzBuzz = new FizzBuzz();
		$expected = 'FizzBuzz';
		$response = $testFizzBuzz->evaluate(15);
		$this->assertEquals($expected, 
						 	$response, 
						 	'Did not get FizzBuzz as expected: ' . $response);
	}


	public function testPassThroughValue() {
		$testFizzBuzz = new FizzBuzz();
		$expected = 7;
		$response = $testFizzBuzz->evaluate($expected);
		$this->assertEquals($expected, 
						 	$response, 
						 	'Did not get the same integer value as expected: ' . $response);
	}

}