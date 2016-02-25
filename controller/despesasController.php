<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of despesasController
 *
 * @author matheus
 */
class despesas extends controller {

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
            if ($mod == 'DF') {
                $this->despesaFixa($mod);
            } elseif ($mod = 'DV') {
                $this->despesaVariavel($mod);
            }
        } elseif ($acao == 'salvar') {
            $data = $_POST;
            $this->gravaDespesa($data);
        }
    }

    /**
     * Cria a view da despesa fixa
     * @param type $mod
     */
    public function despesaFixa($mod) {
        $titulo = 'Lançar Despesa Fixa';
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('mod', $mod);
        $header = $this->smarty->fetch('comum/head.tpl');

        $despesas = $this->pegaDespesas();
        $this->smarty->assign('despesas', $despesas);
        $content = $this->smarty->fetch('despesas/index.tpl');
        $this->smarty->assign('content', $content);
        $this->smarty->assign('header', $header);
        $this->smarty->display('comum/default.tpl');
    }

    /**
     * Cria a view da despesa variável
     * @param type $mod
     */
    public function despesaVariavel($mod) {
        $titulo = 'Lançar Despesa Varivável';
        $this->smarty->assign('titulo', $titulo);
        $this->smarty->assign('mod', $mod);
        $despesas = $this->pegaDespesas();
        $this->smarty->assign('despesas', $despesas);
        $header = $this->smarty->fetch('comum/head.tpl');
        $content = $this->smarty->fetch('despesas/index.tpl');

        $this->smarty->assign('mod', $mod);
        $this->smarty->assign('content', $content);
        $this->smarty->assign('header', $header);
        $this->smarty->display('comum/default.tpl');
    }

    /**
     * Trata e grava as despesas no banco
     * @param type $data array
     */
    public function gravaDespesa($data) {

        $data = $this->trataPost($data);
        $model = new despesaModel();
        $model->gravaDespesa($data);

        $mod = $data['mod'];
        header("Location: despesas.php?mod=$mod");
    }

    /**
     * Trata alguns posts parâmetros passados por post 
     * No insert do banco.
     * @param type $data
     * @return type
     */
    public function trataPost($data) {
        //Verifica se será gravada uma despesa nova ou existente
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
    
    /**
     * Pega as despesas existentes no banco de dados
     * @return type
     */
    public function pegaDespesas() {
        $model = new despesaModel();
        return $model->getDespesasExistentes();
    }

}
