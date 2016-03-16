<?php

/**
 * Description of relatoriosController
 *
 * @author matheus
 */
class relatorios extends controller {

    public function __construct() {
        parent::__construct();

        $sessao = new sessao();
        $users = $sessao->validaSessao();

        $this->smarty->assign('email', $users['user']['email']);
        $this->smarty->assign('nome', $users['user']['nome']);
    }

    public function index() {

        if (isset($_REQUEST['relatorio']) && $_REQUEST['relatorio'] == 'gerar') {

            $this->gerarRelatorio();
        } elseif (isset($_REQUEST['relatorio']) && $_REQUEST['relatorio'] == 'pdf') {

            $this->geraPDF();
        } else {
            $header = $this->smarty->fetch('comum/head.tpl');
            $this->smarty->assign('header', $header);
            $content = $this->smarty->fetch('relatorios/index.tpl');
            $this->smarty->assign('content', $content);

            $this->smarty->display('comum/default.tpl');
        }
    }

    public function geraPDF() {

        $data['data1'] = $_REQUEST['data1'];
        $data['data2'] = $_REQUEST['data2'];


        //Pega as Receitas
        $model = new receitaModel();
        $RV = $model->getReceitasbyTipo('RV', $data);
        $RF = $model->getReceitasbyTipo('RF', $data);

        $totalRV = $model->getReceitasTotalbyTipo('RV', $data);
        $totalRF = $model->getReceitasTotalbyTipo('RF', $data);


        //Pega as despesas
        $model2 = new despesaModel();
        $DV = $model2->getDespesabyTipo('DV', $data);
        $DF = $model2->getDespesabyTipo('DF', $data);

        $totalDV = $model2->getDespesaTotalbyTipo('DV', $data);
        $totalDF = $model2->getDespesaTotalbyTipo('DF', $data);

        $totalReceitas = $totalRV['total'] + $totalRF['total'];
        $totalDespesas = $totalDV['total'] + $totalDF['total'];

        $saldoperiodo = $totalReceitas - $totalDespesas;

        $this->smarty->assign('data1', $data['data1']);
        $this->smarty->assign('data2', $data['data2']);

        $this->smarty->assign('RVs', $RV);
        $this->smarty->assign('RFs', $RF);
        $this->smarty->assign('DVs', $DV);
        $this->smarty->assign('DFs', $DF);
        $this->smarty->assign('totalRV', $totalRV);
        $this->smarty->assign('totalRF', $totalRF);
        $this->smarty->assign('totalDV', $totalDV);
        $this->smarty->assign('totalDF', $totalDF);
        $this->smarty->assign('totalReceitas', $totalReceitas);
        $this->smarty->assign('totalDespesas', $totalDespesas);
        $this->smarty->assign('saldoperiodo', $saldoperiodo);

        $titulo = 'Relatório de Gastos';
        $this->smarty->assign('titulo', $titulo);

        $header = $this->smarty->fetch('comum/head.tpl');
        $this->smarty->assign('header', $header);

        $html = $this->smarty->fetch('relatorios/relatoriogerado.tpl');
        
        $this->montaPDF($html);
    }
    
    /**
     * Gera o PDF
     * @param type $html
     */
    public function montaPDF($html) {
        $pdf = new pdf();
        $pdf->gerar($html);
        
    }

    /**
     * Faz todas as coisas existentes no mundo
     */
    public function gerarRelatorio() {

        $mes1 = $_POST['mes1'];
        $mes2 = $_POST['mes2'];
        $ano = $_POST['ano'];

        //Formata a data (Gambiarra sim)
        $data['data1'] = "$ano-$mes1-01";
        $data['data2'] = "$ano-$mes2-01";

        //Pega as Receitas
        $model = new receitaModel();
        $RV = $model->getReceitasbyTipo('RV', $data);
        $RF = $model->getReceitasbyTipo('RF', $data);

        $totalRV = $model->getReceitasTotalbyTipo('RV', $data);
        $totalRF = $model->getReceitasTotalbyTipo('RF', $data);


        //Pega as despesas
        $model2 = new despesaModel();
        $DV = $model2->getDespesabyTipo('DV', $data);
        $DF = $model2->getDespesabyTipo('DF', $data);

        $totalDV = $model2->getDespesaTotalbyTipo('DV', $data);
        $totalDF = $model2->getDespesaTotalbyTipo('DF', $data);

        $totalReceitas = $totalRV['total'] + $totalRF['total'];
        $totalDespesas = $totalDV['total'] + $totalDF['total'];

        $saldoperiodo = $totalReceitas - $totalDespesas;

        $this->smarty->assign('data1', $data['data1']);
        $this->smarty->assign('data2', $data['data2']);

        $this->smarty->assign('RVs', $RV);
        $this->smarty->assign('RFs', $RF);
        $this->smarty->assign('DVs', $DV);
        $this->smarty->assign('DFs', $DF);
        $this->smarty->assign('totalRV', $totalRV);
        $this->smarty->assign('totalRF', $totalRF);
        $this->smarty->assign('totalDV', $totalDV);
        $this->smarty->assign('totalDF', $totalDF);
        $this->smarty->assign('totalReceitas', $totalReceitas);
        $this->smarty->assign('totalDespesas', $totalDespesas);
        $this->smarty->assign('saldoperiodo', $saldoperiodo);

        $titulo = 'Relatório de Gastos';
        $this->smarty->assign('titulo', $titulo);

        $header = $this->smarty->fetch('comum/head.tpl');
        $this->smarty->assign('header', $header);
        $this->smarty->display('relatorios/relatorio.tpl');
    }


}
