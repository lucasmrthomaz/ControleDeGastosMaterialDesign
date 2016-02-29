<?php

/**
 * Description of pdfController
 *
 * @author matheus
 */
use Dompdf\Dompdf;

class pdf  {
    
    public $name;

    public function __construct() {         
        $this->setName();
    }

    /**
     * Recebe o html para ser renderizado
     * @param type $html
     */
    public function gerar($html) {
        //var_dump($html); die();
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
