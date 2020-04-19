<?php

/**
 * Description of Registrace
 *
 * @author Daniel Hlavička
 */
class Prodejauta extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link("Prodejauta:success"));

        $this->setMethod("POST");

        $this->addSelect('druh', 'Druh vozu:', array('osobní', 'užitkový', 'nákladní', "motocykly", "čtyřkolky", "obytné", "autobusy"))
                ->setRequired(TRUE);

        $this->addSelect('stav', 'Stav:', array('nové', 'ojeté', 'předváděcí', "havarované", "veterán"))
                ->setRequired(TRUE);

        $this->addText('vin', 'Vin:')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::RANGE, 'Vin kód musí mít 17 znaků.', [17, 17]);

        $this->addSelect('vyrobce', 'Výrobce:', array('Škoda', 'Volkswagen'))
                ->setRequired(TRUE);

        $this->addSelect('model', 'Model:', array('Fabia', 'Octavia', "Rapid", "Passata", "Golf"))
                ->setRequired(TRUE);

        $this->addText('doplnnazev', 'Doplňující název modelu:');

        $this->addText('info', 'Informace k vozidlu:');

        $this->addText('barva', 'Barva:')
                ->setRequired('Není barva');

        $this->addSelect('palivo', 'Palivo:', array('benzín', 'nafta', "LPG+benzín", "elektro", "CNG+benzín"))
                ->setRequired(TRUE);
        
        $this->addText('objem', 'Objem v ccm')
                ->setRequired('Není objem')
                ->addRule(\Nette\Forms\Form::INTEGER, 'Není číslo!');
        $this->addText('vykon', 'Výkon v kw')
                ->setRequired('Není výkon')
                ->addRule(\Nette\Forms\Form::INTEGER, 'Není číslo!');
        
        $this->addRadioList('eko', 'Zaplacená ekodaň', array("Ano", "Ne"))
                ->setRequired(TRUE);

        $this->addText('zeme', 'Země původu')
                ->setRequired(TRUE);
        
        $this->addUpload('File', 'Fotografie vozidla:');
      
        $this->addTextArea('poznamka', 'Poznámka');
        
        $this->addText('cena', 'Cena bez DPH')
                ->setRequired('Není cena')
                ->addRule(\Nette\Forms\Form::INTEGER, 'Není číslo!');
        
        $this->addText('cenaDPH', 'Cena včetně DPH')
                ->setRequired('Není cena')
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
