<?php


trait canShootArrows
{
	public function shootArrow()
	{
		echo "<p>Disparo una flecha</p>";
	}
}

trait canRide
{
	public function move()
	{
		echo "<p>Cabalgo</p>";
	}
}

class Unit
{
	public function move()
	{
		echo "<p>Caminó</p>";
	}
}

class Knight extends Unit
{
	use canRide;
}

class Archer extends Unit
{
	use canShootArrows;
}

class MountedArcher extends Unit
{
	use canRide, canShootArrows;
}

$archer = new Archer();
$archer->move();
$archer->shootArrow();

$mountedArcher = new MountedArcher();
$mountedArcher->shootArrow();
$mountedArcher->move(); 
