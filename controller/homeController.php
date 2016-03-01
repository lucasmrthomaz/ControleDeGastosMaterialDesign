<?php


class home extends controllerBasico {

    public function index() {
            $this->smarty->display('home/index.tpl');
        }
    }
