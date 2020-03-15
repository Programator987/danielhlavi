<?php

namespace App\Presenters;

class PracePresenter extends BasePresenter {

    public function renderDefault() {
        dump(Prace::ceil(25));
        dump(Prace::abs(10));
        dump(Prace::cos(12));
        dump(Prace::exp(24));
        dump(Prace::hexdec(39));
        dump(Prace::log10(50));
        //dump(Prace::min(60));
        dump(Prace::pi(20));
        //dump(Prace::pow(18));
        //dump(Prace::rand(16));
    }

    public function createComponentRegister($name) {
        
    }

}
