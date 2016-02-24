<?php
/* Smarty version 3.1.29, created on 2016-02-23 19:23:42
  from "/var/www/html/ControleDeGastosMaterialDesign/view/despesas/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ccdbeebc9ba9_27695872',
  'file_dependency' => 
  array (
    '8e7dbcb01a1dc4fa4e08dcf0cf6c30900b24a2ee' => 
    array (
      0 => '/var/www/html/ControleDeGastosMaterialDesign/view/despesas/index.tpl',
      1 => 1456266220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ccdbeebc9ba9_27695872 ($_smarty_tpl) {
?>
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <?php echo '<script'; ?>
 src="/files/js/receitas/valmoeda.js" type="text/javascript"><?php echo '</script'; ?>
>
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        </div>
        <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">

            <form class="form-horizontal" action="despesas.php?acao=salvar" method="post">
                <fieldset>


                    <legend>Lançar Despesa</legend>
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-2 control-label">Nova: </label>

                        <div class="col-md-10">
                            <input type="text" name="recnova" class="form-control" id="inputEmail" placeholder="Nova Despesa">
                        </div>
                    </div>

                    <label for="chkbox2" class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                        Despesa Existente
                        <input type="checkbox" name="ok" id="chkbox2" class="mdl-checkbox__input form-control">
                    </label>

                    <input type="hidden" name="mod" value="<?php echo $_smarty_tpl->tpl_vars['mod']->value;?>
">

                    <div class="form-group">
                        <label for="conta" class="col-md-2 control-label">Existente</label>
                    </div>
                    <div class="col-md-10">
                        <select name="recexistente" class="form-control"  name="despesarec">
                            <option value="">Despesas</option>
                            <?php
$_from = $_smarty_tpl->tpl_vars['despesas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_despesa_0_saved_item = isset($_smarty_tpl->tpl_vars['despesa']) ? $_smarty_tpl->tpl_vars['despesa'] : false;
$__foreach_despesa_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['despesa'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['despesa']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['despesa']->value) {
$_smarty_tpl->tpl_vars['despesa']->_loop = true;
$__foreach_despesa_0_saved_local_item = $_smarty_tpl->tpl_vars['despesa'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['despesa']->value['descricao'];?>
"><?php echo $_smarty_tpl->tpl_vars['despesa']->value['descricao'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['despesa'] = $__foreach_despesa_0_saved_local_item;
}
if ($__foreach_despesa_0_saved_item) {
$_smarty_tpl->tpl_vars['despesa'] = $__foreach_despesa_0_saved_item;
}
if ($__foreach_despesa_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_despesa_0_saved_key;
}
?>
                        </select>
                    </div>

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
