<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of receitasController
 *
 * @author matheus
 */
class receitas extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($mod = null) {

        if ($mod == 'RF') {
            $this->receitaFixa();
        } elseif ($mod = 'RV') {
            $this->receitaVariavel();
        }
    }

    public function receitaFixa() {
        $titulo = 'Lançar Receita Fixa';
        $this->smarty->assign('titulo', $titulo);
        $header = $this->smarty->fetch('comum/head.tpl');
        $content = $this->smarty->fetch('receitas/index.tpl');

        $this->smarty->assign('content', $content);
        $this->smarty->assign('header', $header);
        $this->smarty->display('comum/default.tpl');
    }

    public function receitaVariavel() {
        $titulo = 'Lançar Receita Varivável';
        $this->smarty->assign('titulo', $titulo);
        $header = $this->smarty->fetch('comum/head.tpl');
        $content = $this->smarty->fetch('receitas/index.tpl');

        $this->smarty->assign('content', $content);
        $this->smarty->assign('header', $header);
        $this->smarty->display('comum/default.tpl');
    }

}
