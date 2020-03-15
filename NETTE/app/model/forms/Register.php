<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Toonws | Templates
 * and open the template in the editor.
 */
namespace App\Presenters;

class Register extends \Nette\Application\UI\Form{

public function __construct($parent = NULL, $name = NULL) {
    parent:: __construct ($parent, $name);
    
    $this->setAction($parent -> link("Kubik:succes"));
    $this->setMethod("POST");
    $this->addText("Jmeno_produktu","Jmeno profilu");
    $this->addTextArea("Zivotpis","Zivotopis");
    $this->addUpload("Fotka","Fotka");
    $this->addText("Vek","Vek");
    $this->addText("Vyska","Vyska");            
    $this->addText("Hmotnost","Hmotnost");
    $this->addText("Delka_Penisu", "Delka penisu");
    $this->addSelect("kategorie","Pohlavi", array("Muz","Zena","SheMale"));
    $this->addRadioList("kokot","Pohlavni organb",array ("Penis","Dira","Oboji"));
    $this->addCheckbox("kokot1","Pohlavni nemoc", ("Mám")) ;
    $this->addSubmit("kokot2", "uložit");
         
            return $this;
    
    
    
}
}