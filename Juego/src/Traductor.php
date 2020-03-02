<?php

namespace Chmalo;

class Traductor 
{
	protected static $mensaje = []; 

	public static function set()
	{
		static::$mensaje = $mensaje;
	}

 	public static function get($key, array $params = array())
 	{
 		if (! static::has($key)){
 			return "[$key]";
 		}

 		return static::replaceParams(static::$mensaje[$key], $params);
 	}

 	public static function has($key)
 	{
 		return isset(static::$mensaje[$key]);
 	}

 	public static function replaceParams($mensaje, array $params)
 	{
 		foreach ($params as $key => $value) {
 			$mensaje = str_replace(":key", $value, $mensaje);
 		}

 		return $mensaje;
 	}
}