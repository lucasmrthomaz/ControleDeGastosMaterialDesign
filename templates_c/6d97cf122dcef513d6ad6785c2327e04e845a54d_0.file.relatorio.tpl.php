<?php
/* Smarty version 3.1.29, created on 2016-02-23 19:36:22
  from "/var/www/html/ControleDeGastosMaterialDesign/view/relatorios/relatorio.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ccdee681a6d2_73591843',
  'file_dependency' => 
  array (
    '6d97cf122dcef513d6ad6785c2327e04e845a54d' => 
    array (
      0 => '/var/www/html/ControleDeGastosMaterialDesign/view/relatorios/relatorio.tpl',
      1 => 1456266981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ccdee681a6d2_73591843 ($_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['header']->value;?>

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <?php echo '<script'; ?>
 src="/files/js/receitas/valmoeda.js" type="text/javascript"><?php echo '</script'; ?>
>
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        </div>
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">

            <form class="form-horizontal" action="relato.php?acao=salvar" method="post">
                <fieldset>


                    <legend>Lançar Receita</legend>
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Nova: </label>

                        <div class="col-md-10">
                            <input type="text" name="recnova" class="form-control" id="inputEmail" placeholder="Nova Despesa">
                        </div>
                    </div>

                    <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        Receita Existente
                        <input type="checkbox" name="ok" id="chkbox2" class="mdl-checkbox__input form-control">
                    </label>

                   

                    <div class="form-group">
                        <label for="mes" class="col-md-2 control-label">Mês</label>
                    </div>
                    <div class="col-md-10">
                        <select name="mes" class="form-control">
                            <option value="">Mês</option>
                            <option value="1">Janeiro</option>
                            <option value="2">Feveriro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                    </div>

                    <div class="col-md-10">
                        <select name="ano" class="form-control">
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                        </select>
                    </div>



                    <div class="col-md-10">
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor R$,00, 00"  onkeyup="moeda(this)">
                    </div>

                    <div class="form-group">
                        <div class="col-md-10 col-md-offset-2">                    
                            <button type="submit" class="btn btn-primary">Gravar</button>
                            <button type="reset" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>
</main><?php }
}