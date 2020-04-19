<?php

namespace App\Presenters;

class ProdejautaPresenter extends BasePresenter {

    public function createComponentProdejauta($name) {
        return new \Prodejauta($this, $name);
    }

    public function actionSuccess($name) {
        $odeslat = $this->getRequest();

        $this->template->odeslat = $odeslat->post;
    }

}
