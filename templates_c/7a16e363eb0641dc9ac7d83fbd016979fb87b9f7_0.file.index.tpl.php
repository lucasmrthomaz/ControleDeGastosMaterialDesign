<?php
/* Smarty version 3.1.29, created on 2016-03-01 09:37:48
  from "/var/www/html/ControleDeGastosMaterialDesign/view/relatorios/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d58d1cc4c770_48027175',
  'file_dependency' => 
  array (
    '7a16e363eb0641dc9ac7d83fbd016979fb87b9f7' => 
    array (
      0 => '/var/www/html/ControleDeGastosMaterialDesign/view/relatorios/index.tpl',
      1 => 1456835830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d58d1cc4c770_48027175 ($_smarty_tpl) {
?>
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <?php echo '<script'; ?>
 src="/files/js/relatorios/validacoescamposrel.js" type="text/javascript"><?php echo '</script'; ?>
>
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <h1>Visualizar Despesas</h1>
        </div>
        <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">

            <form class="form-horizontal" method="post" action="relatorios.php?relatorio=gerar">
                <fieldset>
                    <legend>Selecione um período de tempo</legend>
                    <br><br>

                    <label for="ano">Selecione o ano</label>
                    <div class="col-md-10">
                        <select name="ano" class="form-control">
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mes1" class="col-md-2 control-label">De: </label>
                    </div>
                    <div class="col-md-10">
                        <select name="mes1" id="mes1" class="form-control">
                            <option value="def">Mês</option>
                            <option value="01">Janeiro</option>
                            <option value="02">Feveriro</option>
                            <option value="03">Março</option>
                            <option value="04">Abril</option>
                            <option value="05">Maio</option>
                            <option value="06">Junho</option>
                            <option value="07">Julho</option>
                            <option value="08">Agosto</option>
                            <option value="09">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="mes2" class="col-md-2 control-label">Até: </label>
                    </div>
                    <div class="col-md-10">
                        <select name="mes2" id="mes2" class="form-control">
                            <option value="">Mês</option>
                            <option value="01">Janeiro</option>
                            <option value="02">Feveriro</option>
                            <option value="03">Março</option>
                            <option value="04">Abril</option>
                            <option value="05">Maio</option>
                            <option value="06">Junho</option>
                            <option value="07">Julho</option>
                            <option value="08">Agosto</option>
                            <option value="09">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2"> 
                            <button type="submit" name="enviar" id="enviar" class="btn btn-fab btn-fab-mini">
                                <i class="material-icons">send</i>
                            </button>
                        </div>
                    </div>

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
</main><?php }
}
