<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of despesaModel
 *
 * @author matheus
 */
class despesaModel extends model {

    private $tabpadrao;

    public function __construct() {
        parent::__construct();
        $this->setTab();
    }

    /**
     * Grava as despesas no banco de dados
     * @param type $data array com os valores do form
     */
    public function gravaDespesa($data) {
        //var_dump($data); die();
        $descricao = $data['despesa'];
        $tipo = $data['mod'];
        $valor = $data['valor'];
        $mes = $data['mes'];
        $ano = $data['ano'];
        $data = $data['data'];
        $sql = "INSERT INTO {$this->tabpadrao} VALUES (NULL, '$descricao', '$tipo', '$valor', $mes, '$ano', $data) ORDER BY id";

        mysql_query($sql) or die(mysql_error());
    }

    /**
     * Retorna as despesas existentes no banco de dados
     * @return type
     */
    public function getDespesasExistentes() {
        $sql = "SELECT * FROM $this->tabpadrao GROUP BY descricao";
        $sql = mysql_query($sql);
        $registros = array();

        while ($result = mysql_fetch_assoc($sql)) {
            $registros[] = $result;
        }

        return $registros;
    }

    /**
     * Pega as despesas com base no tipo passado.
     * @param type $where
     * @param type $data
     * @return type
     */
    public function getDespesabyTipo($where = null, $data) {
        $data1 = $data['data1'];
        $data2 = $data['data2'];

        $sql = "SELECT * FROM $this->tabpadrao WHERE tipo = '$where' AND lancamento BETWEEN '$data1' AND '$data2' ORDER BY id";
        $sql = mysql_query($sql);
        $registros = array();

        while ($result = mysql_fetch_assoc($sql)) {
            $registros[] = $result;
        }

        return $registros;
    }

    /**
     * Retorna a soma de todos os valores digitados entre as datas escolhidas
     * @param type $where parâmetros de pesquisa 'RV' ou 'RF'
     * @param type $data array com as datas que serão usadas para a consulta
     */
    public function getDespesaTotalbyTipo($where, $data) {
        $data1 = $data['data1'];
        $data2 = $data['data2'];

        $sql = "SELECT ROUND(SUM(valor), 2) as total FROM $this->tabpadrao WHERE tipo = '$where' AND lancamento BETWEEN '$data1' AND '$data2' ORDER BY id";

        $sql = mysql_query($sql);
        $result = mysql_fetch_assoc($sql);
        return $result;
    }
    
    /**
     * Seta a tab padrão
     */
    private function setTab() {
        $this->tabpadrao = 'despesa';
    }

}
