<?php

/**
 * Description of Prodejauta
 *
 * @author Daniel Hlavička
 */
class Prodejauta extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link("Prodejauta:success"));

        $this->setMethod("POST");

        $this->addSelect('druh', 'Druh vozu:', array('osobní', 'užitkový', 'nákladní', "motocykly", "čtyřkolky", "obytné", "autobusy"))
               ->setRequired('Chybí druh vozu');

        $this->addSelect('stav', 'Stav:', array('nové', 'ojeté', 'předváděcí', "havarované", "veterán"))
                ->setRequired('Chybí stav');

        $this->addText('vin', 'Vin:')
                ->setRequired('Chybí Vin')
                ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'Vin kód musí mít 17 znaků.', 17)
                ->addRule(\Nette\Forms\Form::MAX_LENGTH, 'Vin kód musí mít 17 znaků.', 17);
                
        $this->addSelect('vyrobce', 'Výrobce:', array('Škoda', 'Volkswagen'))
                ->setRequired('Chybí výrobce');

        $this->addSelect('model', 'Model:', array('Fabia', 'Octavia', "Rapid", "Passata", "Golf"))
                ->setRequired('Chybí model');

        $this->addText('doplnnazev', 'Doplňující název modelu:');

        $this->addText('info', 'Informace k vozidlu:');

        $this->addText('barva', 'Barva:')
                ->setRequired('Chybí barva');

        $this->addSelect('palivo', 'Palivo:', array('benzín', 'nafta', "LPG+benzín", "elektro", "CNG+benzín"))
                ->setRequired('Chybí palivo');
        
        $this->addText('objem', 'Objem v ccm')
                ->setRequired('Chybí objem')
                ->addRule(\Nette\Forms\Form::INTEGER, 'Není číslo!');
        $this->addText('vykon', 'Výkon v kw')
                ->setRequired('Chybí výkon')
                ->addRule(\Nette\Forms\Form::INTEGER, 'Není číslo!');
        
        $this->addRadioList('eko', 'Zaplacená ekodaň', array("Ano", "Ne"))
                ->setRequired(TRUE);

        $this->addText('zeme', 'Země původu')
                 ->setRequired('Chybí země původu');
        
        $this->addUpload('File', 'Fotografie vozidla:');
      
        $this->addTextArea('poznamka', 'Poznámka');
        
        $this->addText('cena', 'Cena bez DPH')
                ->setRequired('Chybí cena bez DPH')
                ->addRule(\Nette\Forms\Form::INTEGER, 'Není číslo!');
        
        $this->addText('cenaDPH', 'Cena včetně DPH')
                ->setRequired('Chybí cena včetně DPH')
                ->addRule(\Nette\Forms\Form::INTEGER, 'Není číslo!');

        $this->addPassword('heslo', 'Heslo k položce')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'Heslo musí mít minimálně 6 znaků.', 6);

        $this->addPassword('heslo2', 'Heslo znovu')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EQUAL, 'Hesla se neshoduji', $this['heslo']);
        
        $this->addSubmit('Odeslat', 'Odeslat');
    }

}
