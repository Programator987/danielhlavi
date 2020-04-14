<?php

namespace App\Presenters;

class RegistracePresenter extends BasePresenter {

    public function createComponentRegistrace($name) {
        return new \Registrace($this, $name);
    }

    public function actionSuccess($name) {
        $odeslat = $this->getRequest();

        $this->template->odeslat = $odeslat->post;
    }

}
