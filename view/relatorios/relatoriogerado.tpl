<!DOCTYPE html>
<html>
    <head>

        <style>
            html {
                color: rgba(0,0,0, 0.87);
                font-size: 1em;
                line-height: 1.4; }

            /*
             * Remove text-shadow in selection highlight:
             * https://twitter.com/miketaylr/status/12228805301
             *
             * These selection rule sets have to be separate.
             * Customize the background color to match your design.
             */
            ::-moz-selection {
                background: #b3d4fc;
                text-shadow: none; }
            ::selection {
                background: #b3d4fc;
                text-shadow: none; }

            body {

            }
            body.inverse {

            }
            body.inverse,
            body.inverse .form-control {
                color: rgba(255,255,255, 0.84);
            }
            body.inverse .modal,
            body.inverse .panel-default,
            body.inverse .card,
            body.inverse .modal .form-control,
            body.inverse .panel-default .form-control,
            body.inverse .card .form-control {

                
            }
            body,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .h1,
            .h2,
            .h3,
            .h4 {
                font-family: 'Roboto', 'Helvetica', 'Arial', sans-serif;
                font-weight: 300;
            }

            table {
                background-color: transparent;
            }
            caption {
                padding-top: 8px;
                padding-bottom: 8px;
                color: #777;
                text-align: left;
            }
            th {
                text-align: left;
            }
            .table {
                width: 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }
            .table > thead > tr > th,
            .table > tbody > tr > th,
            .table > tfoot > tr > th,
            .table > thead > tr > td,
            .table > tbody > tr > td,
            .table > tfoot > tr > td {
                padding: 8px;
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #ddd;
            }
            .table > thead > tr > th {
                vertical-align: bottom;
                border-bottom: 2px solid #ddd;
            }
            .table > caption + thead > tr:first-child > th,
            .table > colgroup + thead > tr:first-child > th,
            .table > thead:first-child > tr:first-child > th,
            .table > caption + thead > tr:first-child > td,
            .table > colgroup + thead > tr:first-child > td,
            .table > thead:first-child > tr:first-child > td {
                border-top: 0;
            }
            .table > tbody + tbody {
                border-top: 2px solid #ddd;
            }
            .table .table {
                background-color: #fff;
            }
            .table-condensed > thead > tr > th,
            .table-condensed > tbody > tr > th,
            .table-condensed > tfoot > tr > th,
            .table-condensed > thead > tr > td,
            .table-condensed > tbody > tr > td,
            .table-condensed > tfoot > tr > td {
                padding: 5px;
            }
            .table-bordered {
                border: 1px solid #ddd;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > tbody > tr > th,
            .table-bordered > tfoot > tr > th,
            .table-bordered > thead > tr > td,
            .table-bordered > tbody > tr > td,
            .table-bordered > tfoot > tr > td {
                border: 1px solid #ddd;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > thead > tr > td {
                border-bottom-width: 2px;
            }
            .table-striped > tbody > tr:nth-of-type(odd) {
                background-color: #f9f9f9;
            }
            .table-hover > tbody > tr:hover {
                background-color: #f5f5f5;
            }
            table col[class*="col-"] {
                position: static;
                display: table-column;
                float: none;
            }
            table td[class*="col-"],
            table th[class*="col-"] {
                position: static;
                display: table-cell;
                float: none;
            }
            .table > thead > tr > td.active,
            .table > tbody > tr > td.active,
            .table > tfoot > tr > td.active,
            .table > thead > tr > th.active,
            .table > tbody > tr > th.active,
            .table > tfoot > tr > th.active,
            .table > thead > tr.active > td,
            .table > tbody > tr.active > td,
            .table > tfoot > tr.active > td,
            .table > thead > tr.active > th,
            .table > tbody > tr.active > th,
            .table > tfoot > tr.active > th {
                background-color: #f5f5f5;
            }
            .table-hover > tbody > tr > td.active:hover,
            .table-hover > tbody > tr > th.active:hover,
            .table-hover > tbody > tr.active:hover > td,
            .table-hover > tbody > tr:hover > .active,
            .table-hover > tbody > tr.active:hover > th {
                background-color: #e8e8e8;
            }
            .table > thead > tr > td.success,
            .table > tbody > tr > td.success,
            .table > tfoot > tr > td.success,
            .table > thead > tr > th.success,
            .table > tbody > tr > th.success,
            .table > tfoot > tr > th.success,
            .table > thead > tr.success > td,
            .table > tbody > tr.success > td,
            .table > tfoot > tr.success > td,
            .table > thead > tr.success > th,
            .table > tbody > tr.success > th,
            .table > tfoot > tr.success > th {
                background-color: #dff0d8;
            }
            .table-hover > tbody > tr > td.success:hover,
            .table-hover > tbody > tr > th.success:hover,
            .table-hover > tbody > tr.success:hover > td,
            .table-hover > tbody > tr:hover > .success,
            .table-hover > tbody > tr.success:hover > th {
                background-color: #d0e9c6;
            }
            .table > thead > tr > td.info,
            .table > tbody > tr > td.info,
            .table > tfoot > tr > td.info,
            .table > thead > tr > th.info,
            .table > tbody > tr > th.info,
            .table > tfoot > tr > th.info,
            .table > thead > tr.info > td,
            .table > tbody > tr.info > td,
            .table > tfoot > tr.info > td,
            .table > thead > tr.info > th,
            .table > tbody > tr.info > th,
            .table > tfoot > tr.info > th {
                background-color: #d9edf7;
            }
            .table-hover > tbody > tr > td.info:hover,
            .table-hover > tbody > tr > th.info:hover,
            .table-hover > tbody > tr.info:hover > td,
            .table-hover > tbody > tr:hover > .info,
            .table-hover > tbody > tr.info:hover > th {
                background-color: #c4e3f3;
            }
            .table > thead > tr > td.warning,
            .table > tbody > tr > td.warning,
            .table > tfoot > tr > td.warning,
            .table > thead > tr > th.warning,
            .table > tbody > tr > th.warning,
            .table > tfoot > tr > th.warning,
            .table > thead > tr.warning > td,
            .table > tbody > tr.warning > td,
            .table > tfoot > tr.warning > td,
            .table > thead > tr.warning > th,
            .table > tbody > tr.warning > th,
            .table > tfoot > tr.warning > th {
                background-color: #fcf8e3;
            }
            .table-hover > tbody > tr > td.warning:hover,
            .table-hover > tbody > tr > th.warning:hover,
            .table-hover > tbody > tr.warning:hover > td,
            .table-hover > tbody > tr:hover > .warning,
            .table-hover > tbody > tr.warning:hover > th {
                background-color: #faf2cc;
            }
            .table > thead > tr > td.danger,
            .table > tbody > tr > td.danger,
            .table > tfoot > tr > td.danger,
            .table > thead > tr > th.danger,
            .table > tbody > tr > th.danger,
            .table > tfoot > tr > th.danger,
            .table > thead > tr.danger > td,
            .table > tbody > tr.danger > td,
            .table > tfoot > tr.danger > td,
            .table > thead > tr.danger > th,
            .table > tbody > tr.danger > th,
            .table > tfoot > tr.danger > th {
                background-color: #f2dede;
            }
            .table-hover > tbody > tr > td.danger:hover,
            .table-hover > tbody > tr > th.danger:hover,
            .table-hover > tbody > tr.danger:hover > td,
            .table-hover > tbody > tr:hover > .danger,
            .table-hover > tbody > tr.danger:hover > th {
                background-color: #ebcccc;
            }
            .table-responsive {
                min-height: .01%;
                overflow-x: auto;
            }
            @media screen and (max-width: 767px) {
                .table-responsive {
                    width: 100%;
                    margin-bottom: 15px;
                    overflow-y: hidden;
                    -ms-overflow-style: -ms-autohiding-scrollbar;
                    border: 1px solid #ddd;
                }
                .table-responsive > .table {
                    margin-bottom: 0;
                }
                .table-responsive > .table > thead > tr > th,
                .table-responsive > .table > tbody > tr > th,
                .table-responsive > .table > tfoot > tr > th,
                .table-responsive > .table > thead > tr > td,
                .table-responsive > .table > tbody > tr > td,
                .table-responsive > .table > tfoot > tr > td {
                    white-space: nowrap;
                }
                .table-responsive > .table-bordered {
                    border: 0;
                }
                .table-responsive > .table-bordered > thead > tr > th:first-child,
                .table-responsive > .table-bordered > tbody > tr > th:first-child,
                .table-responsive > .table-bordered > tfoot > tr > th:first-child,
                .table-responsive > .table-bordered > thead > tr > td:first-child,
                .table-responsive > .table-bordered > tbody > tr > td:first-child,
                .table-responsive > .table-bordered > tfoot > tr > td:first-child {
                    border-left: 0;
                }
                .table-responsive > .table-bordered > thead > tr > th:last-child,
                .table-responsive > .table-bordered > tbody > tr > th:last-child,
                .table-responsive > .table-bordered > tfoot > tr > th:last-child,
                .table-responsive > .table-bordered > thead > tr > td:last-child,
                .table-responsive > .table-bordered > tbody > tr > td:last-child,
                .table-responsive > .table-bordered > tfoot > tr > td:last-child {
                    border-right: 0;
                }
                .table-responsive > .table-bordered > tbody > tr:last-child > th,
                .table-responsive > .table-bordered > tfoot > tr:last-child > th,
                .table-responsive > .table-bordered > tbody > tr:last-child > td,
                .table-responsive > .table-bordered > tfoot > tr:last-child > td {
                    border-bottom: 0;
                }
            }
        </style>

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="icon" sizes="192x192" href="images/android-desktop.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Material Design Lite">
        <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#3372DF">

        <link rel="shortcut icon" href="files/images/favicon.png">


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Controle de Gastos Fox </title>
    </head>


    <body>
        <main class="mdl-layout__content mdl-color--grey-100">

            
            <div class="mdl-grid demo-content">
                <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
                    <h1>{$titulo}</h1> 
                </div>
                <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">

                    <form class="form-horizontal" action="relato.php?acao=salvar" method="post">
                        <fieldset>


                            <legend>Período: {$data1} até {$data2}</legend>

                            <br><br>
                            <table class="table table-bordered" >
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

                        </fieldset>
                    </form>
                </div>

            </div>
        </main>
    </body>
</html>