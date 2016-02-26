<?php

/**
 * Description of pdfController
 *
 * @author matheus
 */
class pdf extends controller {
    
    public $name;

    public function __construct() {
        parent::__construct();
        set_include_path(get_include_path() . PATH_SEPARATOR . "/libs/dompdf");
        require_once 'libs/dompdf/autoload.inc.php';   
        $this->setName();
    }

    /**
     * Recebe o html para ser renderizado
     * @param type $html
     */
    public function gerar($html) {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream($this->name);
        
    }
    
    /**
     * Seta um nome padrão para o relatório a ser renderizado
     * @param type $nome
     */
    public function setName($nome = 'relatorio.pdf'){
        $this->name = $nome;
    }
}
