<?php

/**
 * @author Daniel Hlavička
 */
declare(strict_types=1);
include "class/iautaHlavicka.php"; //includuje interface
include "class/autaHlavicka.php"; //includuje abstraktní třídu
include "class/autoHlavicka.php"; //includuje dědící třídu


$vykon = 30; //atribut nastavující výkon

$newAuto = new autoHlavicka(); //instance tridy 

var_dump($newAuto::TYPE); //vypise ve vardump konstantu TYPE

$newAuto->setVykon($vykon); //nastaví atribut pomocí instančního přístupu k funkci 

var_dump($newAuto->getVykon()); // vypíše atribut ve vardump instančním způsobem

