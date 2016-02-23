<?php
/* Smarty version 3.1.29, created on 2016-02-23 11:29:53
  from "/var/www/html/ControleDeGastosMaterialDesign/view/relatorios/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cc6ce18459a2_64332064',
  'file_dependency' => 
  array (
    '7a16e363eb0641dc9ac7d83fbd016979fb87b9f7' => 
    array (
      0 => '/var/www/html/ControleDeGastosMaterialDesign/view/relatorios/index.tpl',
      1 => 1456237791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cc6ce18459a2_64332064 ($_smarty_tpl) {
?>
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <h1>Visualizar Despesas</h1>
        </div>
        <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">

            <form class="form-horizontal">
                <fieldset>


                    <legend>Selecione um período de tempo</legend>
                    <div class="form-group">
                        <label for="date1" class="col-md-2 control-label">De: </label>

                        <div class="col-md-10">
                            <input type="date" class="form-control" id="date1" placeholder="De:">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date2" class="col-md-2 control-label">Até: </label>

                        <div class="col-md-10">
                            <input type="date" class="form-control" id="date2" placeholder="Até:">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">                    
                            <button type="submit" class="btn btn-primary">Visualizar</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
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
