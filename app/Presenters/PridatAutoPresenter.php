<?php

namespace App\Presenters;

class PridatAutoPresenter extends BasePresenter {

    public function createComponentPridatAuto($name) {
        return new \PridatAuto($this, $name);
    }

    public function actionSuccess($name) {
        $odeslat = $this->getRequest();

        $this->template->odeslat = $odeslat->post;
    }

}
