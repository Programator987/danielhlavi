<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;


class CeskafotbalovaligaPresenter extends BasePresenter {
    public function renderDefault(){
    }       
public function createComponentCeskafotbalovaliga($name) {
    return new Ceskafotbalovaliga($this , $name);
}


public function actionSuccess (){

$params = $this ->getRequest();
    $this->template->params = $params->post;
    
}
 
}
