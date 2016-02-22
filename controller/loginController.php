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
   public function index() {
       
       $header = $this->smarty->fetch('comum/head.tpl');
       $this->smarty->assign('header', $header);
       $this->smarty->display('login/index.tpl');
   }
}
