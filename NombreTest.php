<?php
use PHPUnit\Framework\TestCase;
/**
* 
*/
require 'Nombre.php';

class NombreTest extends TestCase
{
	private $nombre;
	public function setUp()
	{
		$this->nombre = new Nombre;
	}
	

	public function nombres()
	{
		return [
		['Daniel'],
		['Carlos'],
		['Mc Donals'],
		['Jr.'],
		["O'higgins"],
		['123456']
		];
	}

	/**
	* @dataProvider nombres
	*/
	public function testNombre($a)
	{
		$this->assertEquals(true,$this->nombre->valido($a));
	}


}