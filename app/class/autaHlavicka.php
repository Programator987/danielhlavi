<?php

/**
 * @author Daniel Hlavička
 */
//abstraktní třída která implementuje interface a nedá se instancovat
abstract class autaHlavicka implements iautaHlavicka {

    protected $vykon; //atribut který je přístupný jen v této třídě a v třídách dědících 

    // funkce implementovaná z interfacu, sloužící k získání hodnoty atributu 
    function getVykonHlavicka() {
        return $this->vykon;
    }

    // funkce implementovaná z interfacu, sloužící k nastavení hodnoty atributu 
    function setVykon($vykon) {
        $this->vykon = $vykon;
    }

}
