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

    public function gravaDespesa($data) {
        //var_dump($data); die();
        $descricao = $data['despesa'];
        $tipo = $data['mod'];
        $valor = $data['valor'];
        $mes = $data['mes'];
        $ano = $data['ano'];
        $data = $data['data'];
        $sql = "INSERT INTO {$this->tabpadrao} VALUES (NULL, '$descricao', '$tipo', '$valor', $mes, '$ano', $data)";
        
        mysql_query($sql) or die(mysql_error());
    }

    public function getDespesasExistentes() {
        $sql = "SELECT * FROM $this->tabpadrao GROUP BY descricao";
        $sql = mysql_query($sql);
        $registros = array();

        while ($result = mysql_fetch_assoc($sql)) {
            $registros[] = $result;
        }

        return $registros;
    }

    public function getDespesabyTipo($where = null, $data) {
        $data1 = $data['data1'];
        $data2 = $data['data2'];
        
        $sql = "SELECT * FROM $this->tabpadrao WHERE tipo = '$where' AND lancamento BETWEEN '$data1' AND '$data2'";
        $sql = mysql_query($sql);
        $registros = array();

        while ($result = mysql_fetch_assoc($sql)) {
            $registros[] = $result;
        }

        return $registros;
    }

    private function setTab() {
        $this->tabpadrao = 'despesa';
    }

}
