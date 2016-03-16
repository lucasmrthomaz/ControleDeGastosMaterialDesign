<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <link href="/files/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="/files/js/registros/excluirregistros.js" type="text/javascript"></script>

        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <h1>Ultimos Registros</h1>
        </div>
        <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">

            <form class="form-horizontal" method="post" action="relatorios.php?relatorio=gerar">
                <fieldset>
                    <legend>ULTIMOS REGISTROS LANÇADOS</legend>
                    <br><br>
                    

                    <legend>Receitas</legend>
                    <table class="table table-responsive table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Tipo</th>
                                <th>Mês</th>
                                <th>Ano</th>
                                <th>Valor</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>

                            {foreach $receitas as $key=>$RF}
                                <tr>
                                    <td>{$RF.id}</td>
                                    <td>{$RF.descricao}</td>
                                    <td>{$RF.tipo}</td>
                                    <td>{$RF.mes}</td>
                                    <td>{$RF.ano}</td>
                                    <td>R$ {$RF.valor}</td>
                                    <td>
                                        <a id      = "excluir_assinante"
                                           class   = "btn btn-default btn-excluir btn-mini"
                                           title   = "EXCLUIR"
                                           onclick = "confirma_excluir_receita({$RF.id});">Excluir
                                        </a>
                                    </td>
                                </tr>
                            {foreachelse}    
                                <tr class="warning">    
                                    <td>Nenhum registro encontrado...</td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </fieldset>
                <fieldset>
                    <legend>Despesas</legend>
                    <table class="table table-responsive table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Tipo</th>
                                <th>Mês</th>
                                <th>Ano</th>
                                <th>Valor</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>

                            {foreach $despesas as $key=>$DF}
                                <tr>
                                    <td>{$DF.id}</td>
                                    <td>{$DF.descricao}</td>
                                    <td>{$DF.tipo}</td>
                                    <td>{$DF.mes}</td>
                                    <td>{$DF.ano}</td>
                                    <td>R$ {$DF.valor}</td>
                                    <td>
                                        <a id      = "excluir_assinante"
                                           class   = "btn btn-default btn-excluir btn-mini"
                                           title   = "EXCLUIR"
                                           onclick = "confirma_excluir_despesa({$DF.id});">Excluir
                                        </a>
                                    </td>
                                </tr>
                            {foreachelse}    
                                <tr class="warning">    
                                    <td>Nenhum registro encontrado...</td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </fieldset>
            </form>
        </div>
        <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
                <div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
                    <h2 class="mdl-card__title-text">Updates</h2>
                </div>
                <div class="mdl-card__supporting-text mdl-color-text--grey-600">
                    Non dolore elit adipisicing ea reprehenderit consectetur culpa.
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">Read More</a>
                </div>
            </div>
            <div class="demo-separator mdl-cell--1-col"></div>

        </div>
    </div>
</main>