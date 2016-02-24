<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of receitaModel
 *
 * @author matheus
 */
class receitaModel extends model {

    private $tabpadrao;

    public function __construct() {
        parent::__construct();
        $this->setTab();
    }

    public function gravaReceita($data) {
        //var_dump($data); die();
        $descricao = $data['despesa'];
        $tipo = $data['mod'];
        $valor = $data['valor'];
        $mes = $data['mes'];
        $ano = $data['ano'];
        $data = $data['data'];
        $sql = "INSERT INTO {$this->tabpadrao} VALUES (NULL, '$descricao', '$tipo', '$valor', $mes, '$ano', $data)";
        mysql_query($sql);
    }

    public function getReceitasExistentes() {
        $sql = "SELECT * FROM $this->tabpadrao GROUP BY descricao";
        $sql = mysql_query($sql);
        $registros = array();

        while ($result = mysql_fetch_assoc($sql)) {
            $registros[] = $result;
        }

        return $registros;
    }

    public function getReceitasbyTipo($where = null, $data) {
        $data1 = $data['data1'];
        $data2 = $data['data2'];
        $sql = "SELECT * FROM $this->tabpadrao WHERE tipo = '$where' AND lancamento BETWEEN '$data1' AND '$data2'";

        $sql = mysql_query($sql);
        $registros = array();

        while ($result = mysql_fetch_assoc($sql)) {
            $registros[] = $result;
        }

        //var_dump($registros); die();
        return $registros;
    }

    public function getReceitasTotalbyTipo($where, $data) {
        $data1 = $data['data1'];
        $data2 = $data['data2'];
        
        $sql = "SELECT SUM(valor) FROM $this->tabpadrao WHERE tupo = '$where' AND lancamento BETWEEN '$data1' AND '$data2'";
        $sql = mysql_query($sql);
        
        var_dump($sql); die();
    }

    private function setTab() {
        $this->tabpadrao = 'receita';
    }

}
