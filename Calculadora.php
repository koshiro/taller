<?php
/**
 * Created by PhpStorm.
 * User: danielriquelme
 * Date: 8/3/17
 * Time: 09:58
 */
/**
* 
*/
class Calculadora
{
	
	function sumar($numero = false, $otroNumero = false)
	{
		if ($numero && $otroNumero) {
			return $numero + $otroNumero;
		}else{
			return false;
		}
	}

	function restar($numero = false, $otroNumero = false)
	{
		if ($numero && $otroNumero) {
			return $numero - $otroNumero;
		}else{
			return false;
		}
	}
}