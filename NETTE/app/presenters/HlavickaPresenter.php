<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Presenters;
/**
 * Description of SamecPresenter
 *
 * @author uzivatel
 */
class HlavickaPresenter extends BasePresenter {
public function renderDefault (){
    $this->template->zadek=2;
    $this->template->loupec=3;      //p
    $user = new \Models\users () ;
    $this->template->users = $user->getUsers(); 
}
}

