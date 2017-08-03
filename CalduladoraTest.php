<?php
use PHPUnit\Framework\TestCase;
/**
* 
*/
require 'Calculadora.php';

class CalculadoraTest extends TestCase
{
	private $calc;
	public function setUp()
	{
		$this->calc = new Calculadora;
	}
	
	public function testAssert()
	{
		$this->assertTrue(true,'debe ser verdadero');
	}

	public function numeros()
	{
		return [
		[2,3,5],
		[2,3,5],
		[2,3,5],
		[2,3,5],
		];
	}

	/**
	* @dataProvider numeros
	*/
	public function testSuma($a,$b,$result)
	{
		$this->assertEquals($result,$this->calc->sumar($a,$b));
	}

	public function testResta()
	{
		$this->assertEquals(0,$this->calc->restar(3,3));
	}
}