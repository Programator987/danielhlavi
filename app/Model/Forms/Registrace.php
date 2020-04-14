<?php

/**
 * Description of Registrace
 *
 * @author Daniel Hlavička
 */
class Registrace extends Nette\Application\UI\Form {

    public function __construct($parent, $name) {
        parent::__construct();

        $this->setAction($parent->link("Registrace:success"));

        $this->setMethod("POST");

        $this->addText('jmeno', 'Jméno')
                ->setRequired('Není jméno');

        $this->addText('prijmeni', 'Přijmení')
                ->setRequired('Není jméno');

        $this->addEmail('email', 'Email')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EMAIL, 'Email je neplatný');

        $this->addPassword('heslo', 'Heslo')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::MIN_LENGTH, 'Heslo musí mít minimálně 6 znaků.', 6);

        $this->addPassword('heslo2', 'Heslo znovu')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::EQUAL, 'Hesla se neshoduji', $this['heslo']);
        $this->addText('znacka', 'Značka motocyklu')
                ->setRequired(TRUE);

        $this->addText('typ', 'Typ motocyklu')
                ->setRequired(TRUE);

        $this->addUpload('File', 'Fotka motocyklu');

        $this->addRadioList('Stari', 'Stáří motocyklu', array('0 - 10 let', '10 - 20 let', '20 a více let'))
                ->setRequired(TRUE);

        $this->addRadioList('zeme', 'Země ve které je motocykl registrován' , array('Česká Republika', 'Slovensko'))
                ->setRequired(TRUE);

        $this->addText('km', 'Počet najetých kilometrů')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::INTEGER, 'Není číslo!');

         $this->addText('kw', 'Počet kw')
                ->setRequired(TRUE)
                ->addRule(\Nette\Forms\Form::INTEGER, 'Není číslo!');

        $this->addTextArea('poznamka', 'Poznámka');

        $this->addSelect('newsletter', 'Chcete zasílat newsletter ?', array('Ano', 'Ne'))
                ->setRequired(TRUE);
        
        $this->addSubmit('Odeslat', 'Odeslat');
    }

}
