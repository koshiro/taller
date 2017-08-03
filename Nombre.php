<?php
/**
 * Created by PhpStorm.
 * User: danielriquelme
 * Date: 8/3/17
 * Time: 11:58
 */
/**
* 
*/
class Nombre
{
	
	function valido($nombre)
	{
		if (strlen($nombre)<3 || strlen($nombre)>16) {
			return false;
		}
		$rexSafety = "/^[\p{L}\p{P}\p{Zs}]+$/";
		if (preg_match($rexSafety, $nombre)) {
		    return true;
		} else {
		    return false;
		}
			}
}