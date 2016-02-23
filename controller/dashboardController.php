<?php
/**
 * Description of dashboardController
 *
 * @author matheus
 */
class dashboard extends controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $header = $this->smarty->fetch('comum/head.tpl');
        $content = $this->smarty->fetch('dashboard/dashboard.tpl');
        $this->smarty->assign('header', $header);
        $this->smarty->assign('content', $content);
        $this->smarty->display('comum/default.tpl');
    }
    
}
