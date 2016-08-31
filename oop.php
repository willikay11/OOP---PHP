<?php
namespace MyProject;

interface fighter
{
	function getMovement();

	function getTechnic();

	function getSpecial_move();

	function getArmor();
}

class Character 
{
	public $name;
	public $power;
	public $health;
	public $weapon;

	function __construct($name,$power,$health,$weapon)
	{
		$this -> name = $name;
		$this -> power = $power;
		$this -> health = $health;
		$this -> weapon = $weapon;
	}

	function show_charater()
	{
		echo "Player Name: ".$this -> name; 
		echo "Player power: ".$this -> power;
		echo "Player health: ".$this -> health;
		echo "Player weapon: ".$this -> weapon;
	}

}

class goodside extends Character implements fighter
{
	public $move;
	public $tech;
	public $sp;
	public $arm;

	function __construct($move,$tech,$sp,$arm)
	{	
		parent::__construct("KANO","1230","105%","Blade");
		$this -> move = $move;
		$this -> tech = $tech;
		$this -> sp = $sp;
		$this -> arm = $arm;
	}
	function getMovement()
	{
		echo "Movevment ".$this -> move;
	}

	function getTechnic()
	{
		echo "Technic ".$this -> tech;
	}

	function getSpecial_move()
	{
		echo "Special Move ".$this -> sp;
	}

	function getArmor()
	{
		echo "Armor ".$this -> arm;
	}
}

class badside extends Character implements fighter
{
	public $move;
	public $tech;
	public $sp;
	public $arm;
	function __construct($move,$tech,$sp,$arm)
	{
		parent::__construct("LIEU KEN","1430","95%","Samurai Sword");
		$this -> $move = $move;
		$this -> $tech = $tech;
		$this -> $sp = $sp; 
		$this -> $arm = $arm;
	}
	function getMovement()
	{
		echo "Movevment ".$this -> move;
	}

	function getTechnic()
	{
		echo "Technic ".$this -> tech;
	}

	function getSpecial_move()
	{
		echo "Special Move ".$this -> sp;
	}

	function getArmor()
	{
		echo "Armor ".$this -> arm;
	}

}

$chargood = new goodside("Fast","Martial Arts","Artisan","Blood Ruby");
$chargood -> show_charater();
$chargood -> getMovement();
$chargood -> getTechnic();
$chargood -> getSpecial_move();
$chargood -> getArmor();
$charbad = new badside("Very Fast","Kung FU","Cut Throat Ninja","None");
$charbad -> show_charater();
$charbad -> getMovement();
$charbad -> getTechnic();
$charbad -> getSpecial_move();
$charbad -> getArmor();
?>