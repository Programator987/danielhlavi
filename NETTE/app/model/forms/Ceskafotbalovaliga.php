<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of Ceska_fotbalova_liga
 *
 * @author uzivatel
 */
class Ceskafotbalovaliga extends \Nette\Application\UI\Form {
   public function __construct( $parent, $name) {
       parent::__construct($parent, $name);
       
       $this->setAction($parent -> link("Ceskafotbalovaliga:success"));
       $this->addText("Jmeno_tymu","Jméno týmu");
       $this->addPassword("Heslo", "Heslo")
            ->setRequired(True)
             ->addRule(\Nette\Forms\Form::MIN_LENGTH, "Heslo musí mít 6 znaků");
       $this->addPassword("Overeni_hesla", "Ověření hesla")
              ->setRequired(True)
              ->addRule(\Nette\Forms\Form::EQUAL,"Hesla se neshodují", $this["Heslo"]);
       $this->addRadioList("Liga","Ligy",array ("První","Druhá","Třetí"));
       $this->addCheckboxList("cizinci", "Cizinci", array ("Nemám","Slovák","Jiné"));
       $this->addUpload("File","Zde fotku");
       $this->addSelect("Tym","Vyber tým", array ("Sparta","Slavia","Plzen","Olomouc"));
       $this->addEmail("Email", "E-mail")
            ->setRequired(True)
            ->addRule(\Nette\Forms\Form::INTEGER, "Není E-mail");
       $this->addTextArea("poznamky","Poznámky");
       $this->addSubmit("Odeslat", "Odeslat");
   }
}
