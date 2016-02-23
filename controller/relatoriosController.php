<?php

/**
 * Description of relatoriosController
 *
 * @author matheus
 */
class relatorios extends controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
       $header = $this->smarty->fetch('comum/head.tpl');
       $this->smarty->assign('header', $header);
       $content = $this->smarty->fetch('relatorios/index.tpl');
       $this->smarty->assign('content', $content);
       
       $this->smarty->display('comum/default.tpl');
       
    }
    
}
