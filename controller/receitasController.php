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

    /**
     * Trata as ações enviadas por get e chama
     * suas respectivas funções responsáveis
     * @param string $mod
     */
    public function index($mod = null) {

        $acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : null;

        //Define as ações 
        if ($acao == null) {
            if ($mod == 'RF') {
                $this->receitaFixa($mod);
            } elseif ($mod = 'RV') {
                $this->receitaVariavel($mod);
            }
        } elseif ($acao == 'salvar') {
            $data = $_POST;
            $this->gravaReceita($data);
        }
    }

    /**
     * Cria a view da receita fixa
     * @param type $mod
     */
    public function receitaFixa($mod) {
        $titulo = 'Lançar Receita Fixa';
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('mod', $mod);
        $header = $this->smarty->fetch('comum/head.tpl');

        $receitas = $this->pegaReceitas();
        $this->smarty->assign('receitas', $receitas);
        $content = $this->smarty->fetch('receitas/index.tpl');
        $this->smarty->assign('content', $content);
        $this->smarty->assign('header', $header);
        $this->smarty->display('comum/default.tpl');
    }

    /**
     * Cria a view da receita variável
     * @param type $mod
     */
    public function receitaVariavel($mod) {
        $titulo = 'Lançar Receita Varivável';
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('mod', $mod);
        $receitas = $this->pegaReceitas();
        $this->smarty->assign('receitas', $receitas);
        $header = $this->smarty->fetch('comum/head.tpl');
        $content = $this->smarty->fetch('receitas/index.tpl');

        $this->smarty->assign('mod', $mod);
        $this->smarty->assign('content', $content);
        $this->smarty->assign('header', $header);
        $this->smarty->display('comum/default.tpl');
    }

    /**
     * Trata e grava as receitas no banco
     * @param type $data array
     */
    public function gravaReceita($data) {

        $data = $this->trataPost($data);
        $model = new receitaModel();
        $model->gravaReceita($data);

        $mod = $data['mod'];
        header("Location: receitas.php?mod=$mod");
    }

    /**
     * Trata alguns posts parâmetros passados por post 
     * No insert do banco.
     * @param type $data
     * @return type
     */
    public function trataPost($data) {
        //Verifica se será gravada uma receita nova ou existente
        if (isset($data['ok']) && $data['ok'] == 'on') {
            $data['despesa'] = $data['recexistente'];
        } else {
            $data['despesa'] = $data['recnova'];
        }

        //Trata as virgulas para serem inseridas no MySQL
        $data['valor'] = str_replace(".", "", $data['valor']);
        $data['valor'] = str_replace(",", ".", $data['valor']);
        
        $data['data'] = "'{$data['ano']}-{$data['mes']}-01'";

        return $data;
    }

    public function pegaReceitas() {
        $model = new receitaModel();
        return $model->getReceitasExistentes();
    }

}
