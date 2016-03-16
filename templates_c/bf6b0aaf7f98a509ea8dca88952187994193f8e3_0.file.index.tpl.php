<?php
/* Smarty version 3.1.29, created on 2016-03-15 21:21:34
  from "/var/www/html/ControleDeGastosMaterialDesign/view/registros/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e8a70ebf0a79_61112252',
  'file_dependency' => 
  array (
    'bf6b0aaf7f98a509ea8dca88952187994193f8e3' => 
    array (
      0 => '/var/www/html/ControleDeGastosMaterialDesign/view/registros/index.tpl',
      1 => 1458087692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e8a70ebf0a79_61112252 ($_smarty_tpl) {
?>
<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
        <link href="/files/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="/files/js/registros/excluirregistros.js" type="text/javascript"><?php echo '</script'; ?>
>

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

                            <?php
$_from = $_smarty_tpl->tpl_vars['receitas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_RF_0_saved_item = isset($_smarty_tpl->tpl_vars['RF']) ? $_smarty_tpl->tpl_vars['RF'] : false;
$__foreach_RF_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['RF'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['RF']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['RF']->value) {
$_smarty_tpl->tpl_vars['RF']->_loop = true;
$__foreach_RF_0_saved_local_item = $_smarty_tpl->tpl_vars['RF'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RF']->value['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RF']->value['descricao'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RF']->value['tipo'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RF']->value['mes'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RF']->value['ano'];?>
</td>
                                    <td>R$ <?php echo $_smarty_tpl->tpl_vars['RF']->value['valor'];?>
</td>
                                    <td>
                                        <a id      = "excluir_assinante"
                                           class   = "btn btn-default btn-excluir btn-mini"
                                           title   = "EXCLUIR"
                                           onclick = "confirma_excluir_receita(<?php echo $_smarty_tpl->tpl_vars['RF']->value['id'];?>
);">Excluir
                                        </a>
                                    </td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['RF'] = $__foreach_RF_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['RF']->_loop) {
?>    
                                <tr class="warning">    
                                    <td>Nenhum registro encontrado...</td>
                                </tr>
                            <?php
}
if ($__foreach_RF_0_saved_item) {
$_smarty_tpl->tpl_vars['RF'] = $__foreach_RF_0_saved_item;
}
if ($__foreach_RF_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_RF_0_saved_key;
}
?>
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

                            <?php
$_from = $_smarty_tpl->tpl_vars['despesas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_DF_1_saved_item = isset($_smarty_tpl->tpl_vars['DF']) ? $_smarty_tpl->tpl_vars['DF'] : false;
$__foreach_DF_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['DF'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['DF']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['DF']->value) {
$_smarty_tpl->tpl_vars['DF']->_loop = true;
$__foreach_DF_1_saved_local_item = $_smarty_tpl->tpl_vars['DF'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DF']->value['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DF']->value['descricao'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DF']->value['tipo'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DF']->value['mes'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DF']->value['ano'];?>
</td>
                                    <td>R$ <?php echo $_smarty_tpl->tpl_vars['DF']->value['valor'];?>
</td>
                                    <td>
                                        <a id      = "excluir_assinante"
                                           class   = "btn btn-default btn-excluir btn-mini"
                                           title   = "EXCLUIR"
                                           onclick = "confirma_excluir_despesa(<?php echo $_smarty_tpl->tpl_vars['DF']->value['id'];?>
);">Excluir
                                        </a>
                                    </td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['DF'] = $__foreach_DF_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['DF']->_loop) {
?>    
                                <tr class="warning">    
                                    <td>Nenhum registro encontrado...</td>
                                </tr>
                            <?php
}
if ($__foreach_DF_1_saved_item) {
$_smarty_tpl->tpl_vars['DF'] = $__foreach_DF_1_saved_item;
}
if ($__foreach_DF_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_DF_1_saved_key;
}
?>
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
</main><?php }
}
