<?php
include_once("Papagaio.class.php");
include_once("Pardal.class.php");
include_once("Baleia.class.php");
include_once("Cachorro.class.php");
include_once("Leao.class.php");

$animais[] = new Papagaio();
$animais[] = new Pardal();
$animais[] = new Cachorro();
$animais[] = new Cachorro();
$animais[] = new Baleia();
$animais[] = new Leao();
$animais[] = new Pardal();
$animais[] = new Leao();

foreach($animais as $animal){
	echo $animal->qualFamilia().' - '.$animal->quemEh().'<br>';
}