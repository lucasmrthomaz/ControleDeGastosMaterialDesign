{$header}
<main class="mdl-layout__content mdl-color--grey-100">
    <script src="/files/js/loader.js" type="text/javascript"></script>
    <script src="/files/js/relatorio.js" type="text/javascript"></script>
    
    <link href="/files/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <div class="mdl-grid demo-content">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <h1>{$titulo}</h1> 
        </div>
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">

            <form class="form-horizontal" action="relato.php?acao=salvar" method="post">
                <fieldset>


                    <legend>Período: {$data1|date_format: 'd/m/Y'|default:"-"} até {$data2|date_format: 'd/m/Y'|default:"-"}</legend>
                    <a class='btn btn-default' href="relatorios.php?relatorio=pdf&data1={$data1}&data2={$data2}">Gerar PDF</a>
                    <a class='btn btn-default' href="relatorios.php?relatorio=email&data1={$data1}&data2={$data2}">Enviar Email</a>
                    <br><br>
                    <table class="table table-responsive table-hover ">
                        <legend>Receita Fixa</legend>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Mês</th>
                                <th>Ano</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $RFs as $key=>$RF}
                                <tr>
                                    <td>{$RF.id}</td>
                                    <td>{$RF.descricao}</td>
                                    <td>{$RF.mes}</td>
                                    <td>{$RF.ano}</td>
                                    <td>R$ {$RF.valor}</td>
                                </tr>
                            {foreachelse}    
                                <tr class="warning">    
                                    <td>Nenhum registro encontrado...</td>
                                </tr>
                            {/foreach}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total RF: </td>
                                <td>R$ {$totalRF.total}</td>
                            </tr>

                        </tbody>
                    </table>

                    <table class="table table-responsive table-hover ">
                        <legend>Receita Variada</legend>
                        
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Mês</th>
                                <th>Ano</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $RVs as $key=>$RV}
                                <tr>
                                    <td>{$RV.id}</td>
                                    <td>{$RV.descricao}</td>
                                    <td>{$RV.mes}</td>
                                    <td>{$RV.ano}</td>
                                    <td>R$ {$RV.valor}</td>
                                </tr>
                            {foreachelse}    
                                <tr class="warning">    
                                    <td colspan="5">Nenhum registro encontrado...</td>
                                </tr>
                            {/foreach}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total RV: </td>
                                <td>R$ {$totalRV.total}</td>
                            </tr>

                        </tbody>
                    </table>

                    <table class="table table-responsive table-hover ">
                        <legend>Despesa Fixa</legend>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Mês</th>
                                <th>Ano</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $DFs as $key=>$DF}
                                <tr>
                                    <td>{$DF.id}</td>
                                    <td>{$DF.descricao}</td>
                                    <td>{$DF.mes}</td>
                                    <td>{$DF.ano}</td>
                                    <td>R$ {$DF.valor}</td>
                                </tr>
                            {foreachelse}    
                                <tr class="warning">    
                                    <td colspan="5">Nenhum registro encontrado...</td>
                                </tr>
                            {/foreach}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total DF: </td>
                                <td>R$ {$totalDF.total}</td>
                            </tr>

                        </tbody>
                    </table>        

                    <table class="table table-responsive table-hover ">
                        <legend>Despesa Variada</legend>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Mês</th>
                                <th>Ano</th>
                                <th>Valor</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $DVs as $key=>$DV}
                                <tr>
                                    <td>{$DV.id}</td>
                                    <td>{$DV.descricao}</td>
                                    <td>{$DV.mes}</td>
                                    <td>{$DV.ano}</td>
                                    <td>R$ {$DV.valor}</td>
                                </tr>
                            {foreachelse}    
                                <tr class="warning">    
                                    <td colspan="5">Nenhum registro encontrado...</td>
                                </tr>
                            {/foreach}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total DV: </td>
                                <td>R$ {$totalDV.total}</td>
                            </tr>
                        </tbody>
                    </table>        

                    <table class="table table-responsive table-hover ">
                        <legend>Saldo do Período</legend>
                        <thead>
                            <tr>
                                <th>Total de Receitas do Período</th>
                                <th>Total de Despesas do Período</th>
                                <th>Saldo do Período</th>
                            </tr>
                            <tr>
                                <td>R$ {$totalReceitas}</td>
                                <td>R$ {$totalDespesas}</td>
                                <td>R$ {$saldoperiodo}</td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <input type="hidden" name="totalRV" id="totalreceita" value="{$totalReceitas}">
                    <input type="hidden" name="totalRV" id="totaldespesa" value="{$totalDespesas}">
                            
                    <input type="hidden" name="totalRV" id="totalRV" value="{$totalRV.total}">
                    <input type="hidden" name="totalRF" id="totalRF" value="{$totalRF.total}">
                    
                    <input type="hidden" name="totalDV" id="totalDV" value="{$totalDV.total}">
                    <input type="hidden" name="totalDF" id="totalDF" value="{$totalDF.total}">
                    <legend>Gráficos e Relatórios</legend>
                    <div id="tipogasto" style="width: 500px; height: 400px;"></div>
                    <div id="saldoview" style="width: 500px; height: 400px;"></div>


                </fieldset>
            </form>
        </div>

    </div>
</main>