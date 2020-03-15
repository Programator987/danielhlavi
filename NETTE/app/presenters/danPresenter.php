<?php
 

namespace App\Presenters ;

class danPresenter extends BasePresenter{
public function renderDefault() {

}
public function createComponentRegister($name) {
    return new Register($this , $name);
}
}
