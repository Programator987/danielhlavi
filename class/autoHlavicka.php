<?php

/**
 * @author Daniel Hlavička
 */
declare(strict_types=1);

// třída která dědí z předchozí třídy
class autoHlavicka extends autaHlavicka {

    //pevně nastavená neměnná konstanta ke které se přistupuje staticky 
    const TYPE = 1;

    //funkce pomocí které se získavají hodnoty atributu 
    public function getVykon() {
        return $this->vykon;
    }

    //funkce která hodnotu atributu nastaví 
    public function setVykon($vykon) {
        $this->vykon = $vykon;
    }

}
