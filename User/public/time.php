<?php

class Time
{
	protected $time = null;

	public function __construct($time = null)
	{
		$this->time = $time ?: time();
	}	

	public function __toString()
	{
		return date('d/m/Y H:i:s', $this->time);
	}

	public function tomorrow()
	{
		return new Time($this->time + 24*60*60);
	}

		public function yesterday()
	{
		return new Time($this->time - 24*60*60);
	}
}

$today = new Time();

echo "<p>Hoy es {$today}</p>";  

$tomorrow = $today->tomorrow();

echo "<p>Mañana sera {$tomorrow}</p>";

echo "<p>Pasado mañana sera {$tomorrow->tomorrow()}</p>";

echo "<p>ayer fue {$today->yesterday()}</p>";