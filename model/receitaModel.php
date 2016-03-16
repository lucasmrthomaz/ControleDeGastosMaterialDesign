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

    /**
     * Grava as receitas no banco de dados
     * @param type $data
     */
    public function gravaReceita($data) {
        var_dump($data);
        $descricao = $data['despesa'];
        $tipo = $data['mod'];
        $valor = $data['valor'];
        $mes = $data['mes'];
        $ano = $data['ano'];
        $data = $data['data'];
        $sql = "INSERT INTO {$this->tabpadrao} VALUES (NULL, '$descricao', '$tipo', '$valor', $mes, '$ano', $data)";
        mysql_query($sql) or die(mysql_error());
    }
    
    public function delReceita($id) {
        $sql = "DELETE FROM $this->tabpadrao WHERE id = {$id}";
        mysql_query($sql);
        return true;
    }

    /**
     * Pega todas as receitas existentes no banco de dados
     * @return type
     */
    public function getReceitasExistentes($where = null) {
        $sql = "SELECT * FROM $this->tabpadrao GROUP BY descricao";
        $sql = mysql_query($sql);
        $registros = array();

        while ($result = mysql_fetch_assoc($sql)) {
            $registros[] = $result;
        }

        return $registros;
    }

    public function findAll($where = null) {
        $sql = "SELECT * FROM $this->tabpadrao";
        $sql = mysql_query($sql);
        $registros = array();

        while ($result = mysql_fetch_assoc($sql)) {
            $registros[] = $result;
        }

        return $registros;
    }

    /**
     * Pega todas as receitas to banco de dados de acordo com o parâmetro passado
     * e as datas fornecidas
     * @param type $where
     * @param type $data
     * @return type
     */
    public function getReceitasbyTipo($where = null, $data) {
        $data1 = $data['data1'];
        $data2 = $data['data2'];
        $sql = "SELECT * FROM $this->tabpadrao WHERE tipo = '$where' AND lancamento BETWEEN '$data1' AND '$data2' ORDER BY id";

        $sql = mysql_query($sql);
        $registros = array();

        while ($result = mysql_fetch_assoc($sql)) {
            $registros[] = $result;
        }

        //var_dump($registros); die();
        return $registros;
    }

    /**
     * Retorna a soma de todos os valores digitados entre as datas escolhidas
     * @param type $where parâmetros de pesquisa 'RV' ou 'RF'
     * @param type $data array com as datas que serão usadas para a consulta
     */
    public function getReceitasTotalbyTipo($where, $data) {
        $data1 = $data['data1'];
        $data2 = $data['data2'];

        $sql = "SELECT ROUND(SUM(valor), 2) as total FROM $this->tabpadrao WHERE tipo = '$where' AND lancamento BETWEEN '$data1' AND '$data2' ORDER BY id";

        $sql = mysql_query($sql);
        return mysql_fetch_assoc($sql);
    }

    /**
     * Seta a tab padrão
     */
    private function setTab() {
        $this->tabpadrao = 'receita';
    }

}
