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

    /**
     * Valida o Login
     * @param type $data
     * @return type
     */
    public function validaLogin($data) {
        
        $this->setPass($data['pass']);
        $this->setEmail($data['email']);

        $sql = "SELECT * FROM $this->tabpadrao WHERE email = '$this->email' AND senha = '$this->pass'";
        $query = mysql_query($sql);
        $result = mysql_fetch_assoc($query);
        
        return $result;      
    }

    /**
     * Seta a tab padrão
     */
    public function setTab() {
        $this->tabpadrao = 'usuario';
    }
    
    /**
     * Encripta o password com o valor em MD5 e seta 
     * @param type $password
     */
    private function setPass($password) {
        $this->pass = md5($password);
    }

    /**
     * Seta o E-mail
     * @param type $email
     */
    private function setEmail($email) {
        $this->email = $email;
    }

}
