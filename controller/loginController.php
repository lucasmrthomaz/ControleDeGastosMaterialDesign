<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginController
 *
 * @author matheus
 */
class login extends controller {

    public function __construct() {
        parent::__construct();
        
    }
    
    /**
     * Valida o Login
     * @param type $data
     */
    public function valida($data) {
        
        $model = new loginModel();
        $return = $model->validaLogin($data);
        //var_dump($return); die('loko');

        if (isset($return) && $return == True && sizeof($return) != 0) {
            
            $session = new sessao();
            $session->gravaSessao($return);
            $this->toHome();
                      
        } else {
            $this->frontpage();
        }
    }

    /**
     * Redireciona para a página de login
     */
    public function frontpage() {
        $header = $this->smarty->fetch('comum/head.tpl');
        $this->smarty->assign('header', $header);
        $this->smarty->display('login/index.tpl');
    }
    
       public function toHome() {
           header("Location: dashboard.php");
    }

}
