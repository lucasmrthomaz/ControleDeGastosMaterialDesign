<?php

/**
 * Description of despesasController
 *
 * @author matheus
 */
class despesas extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($mod) {

        if ($mod == 'DF') {
            $this->despesaFixa();
        } elseif ($mod = 'DV') {
            $this->despesaVariavel();
        }
    }

    public function despesaFixa() {
        $titulo = 'Despesa Fixa';
        $this->smarty->assign('titulo', $titulo);
        $header = $this->smarty->fetch('comum/head.tpl');
        $content = $this->smarty->fetch('despesas/index.tpl');

        $this->smarty->assign('content', $content);
        $this->smarty->assign('header', $header);
        $this->smarty->display('comum/default.tpl');
    }

    public function despesaVariavel() {
        $titulo = 'Despesa Fixa';
        $this->smarty->assign('titulo', $titulo);
        $header = $this->smarty->fetch('comum/head.tpl');
        $content = $this->smarty->fetch('despesas/index.tpl');

        $this->smarty->assign('content', $content);
        $this->smarty->assign('header', $header);
        $this->smarty->display('comum/default.tpl');
    }

}
