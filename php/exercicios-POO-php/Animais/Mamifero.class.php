<?php
include_once ("Animal.class.php");
abstract class Mamifero extends Animal{
	function qualFamilia(){
		return 'Mamifero';
	}
}