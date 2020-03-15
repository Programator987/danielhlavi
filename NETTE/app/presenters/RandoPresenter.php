<?php


namespace App\Presenters;


class RandoPresenter extends BasePresenter
{

    public function renderThings(){
       $grando = new \App\Model\grando();
        $this->template->firstname =  $grando->Borat();
         $this->template->surname = $grando->Nekonecny();
         $this->template->nigga = $grando->getNigga();

    }

}