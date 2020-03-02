<?php

namespace Chmalo;

class Log 
{
	protected $logger;

	public static function setLogger(Logger $logger)
	{
		static::$logger = $logger;
	}

	public stactic function info($mensaje)
	{
		static::$logger->info($mensaje);   
	}
}