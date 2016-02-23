<?php
/* Smarty version 3.1.29, created on 2016-02-22 14:55:24
  from "/var/www/html/ControleDeGastosMaterialDesign/view/receitas/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cb4b8c661fd8_73322776',
  'file_dependency' => 
  array (
    'cf7304973c6faa3c13e5ddafce01cdcb5c3e03ee' => 
    array (
      0 => '/var/www/html/ControleDeGastosMaterialDesign/view/receitas/index.tpl',
      1 => 1456163721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cb4b8c661fd8_73322776 ($_smarty_tpl) {
?>
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        </div>
        <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">

            <form class="form-horizontal">
                <fieldset>
                    <legend>Lançar Receita</legend>
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Nova: </label>

                        <div class="col-md-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Nova ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="conta" class="col-md-2 control-label">Existente</label>
                    </div>
                    <div class="col-md-10">
                        <select name="conta" class="form-control">
                            <option value="1">Teste</option>
                            <option value="2">Mimimi</option>
                        </select>

                    </div>

                    <div class="col-md-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>

                    <div class="col-md-10">

                        <label for="chkbox1" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                            <input type="checkbox" id="chkbox1" class="mdl-checkbox__input form-control">
                            <span class="mdl-checkbox__label">Click per object</span>
                        </label>


                        <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                            <input type="checkbox" id="chkbox2" class="mdl-checkbox__input form-control">
                            <span class="mdl-checkbox__label">Views per object</span>
                        </label>

                        <label for="chkbox3" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                            <input type="checkbox" id="chkbox3" class="mdl-checkbox__input form-control">
                            <span class="mdl-checkbox__label">Objects selected</span>
                        </label>

                        <label for="chkbox4" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                            <input type="checkbox" id="chkbox4" class="mdl-checkbox__input form-control">
                            <span class="mdl-checkbox__label">Objects viewed</span>
                        </label>




                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">
                            <button type="button" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
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
