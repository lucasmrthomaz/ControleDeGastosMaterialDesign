<?php

/**
 * Description of registrosController
 *
 * @author matheus
 */
class registros extends controller {

    public function __construct() {
        parent::__construct();

        $sessao = new sessao();
        $users = $sessao->validaSessao();

        $this->smarty->assign('email', $users['user']['email']);
        $this->smarty->assign('nome', $users['user']['nome']);
    }

    public function index() {
        if (isset($_GET['id']) && isset($_GET['mod'])) {
            if ($_GET['mod'] == "R") {
                $this->delReceita($_GET['id']);
            }
            if ($_GET['mod'] == "D") {
                $this->delDespesa($_GET['id']);
            }
        }

        $modelReceita = new receitaModel();
        $receitas = $modelReceita->findAll("LIMIT 1, 10");

        $modelDespesas = new despesaModel();
        $despesas = $modelDespesas->findAll("LIMIT 1, 10");

        $this->smarty->assign('receitas', $receitas);
        $this->smarty->assign('despesas', $despesas);

        $header = $this->smarty->fetch('comum/head.tpl');
        $content = $this->smarty->fetch('registros/index.tpl');

        $this->smarty->assign('header', $header);
        $this->smarty->assign('content', $content);
        $this->smarty->display('comum/default.tpl');
    }

    public function delReceita($id) {
        $model = new receitaModel();
        $model->delReceita($id);
    }

    public function delDespesa($id) {
        $model = new despesaModel();
        $model->delDespesa($id);
    }

}
