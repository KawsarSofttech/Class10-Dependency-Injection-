<?php
include 'Car.php';

class Prado{
	// dependency injection
	public $car;
	public function __construct()
	{
		$this->car = new Car();
	}

	public function getData()
	{
		echo $this->car->engine();
	}
}

?>