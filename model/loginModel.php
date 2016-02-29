<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginModel
 *
 * @author matheus
 */
class loginModel extends model {

    protected $tabpadrao;
    protected $email;
    protected $pass;

    public function __construct() {
        parent::__construct();
        $this->setTab();
    }

    public function validaLogin($data) {
        
        $this->setPass($data['pass']);
        $this->setEmail($data['email']);

        $sql = "SELECT * FROM $this->tabpadrao WHERE email = '$this->email' AND senha = '$this->pass'";
        $query = mysql_query($sql);
        $result = mysql_fetch_assoc($query);
        
        return $result;      
    }

    public function setTab() {
        $this->tabpadrao = 'usuario';
    }

    private function setPass($password) {
        $this->pass = md5($password);
    }

    private function setEmail($email) {
        $this->email = $email;
    }

}
