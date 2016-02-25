<?php
/* Smarty version 3.1.29, created on 2016-02-25 09:11:07
  from "/var/www/html/ControleDeGastosMaterialDesign/view/relatorios/relatorio.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ceef5b88c778_13981490',
  'file_dependency' => 
  array (
    '6d97cf122dcef513d6ad6785c2327e04e845a54d' => 
    array (
      0 => '/var/www/html/ControleDeGastosMaterialDesign/view/relatorios/relatorio.tpl',
      1 => 1456402264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ceef5b88c778_13981490 ($_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['header']->value;?>

<main class="mdl-layout__content mdl-color--grey-100">
    <link href="/files/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <div class="mdl-grid demo-content">
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        </div>
        <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">

            <form class="form-horizontal" action="relato.php?acao=salvar" method="post">
                <fieldset>


                    <legend>Período: xx-xx-xxxx até xx-xx-xxxx</legend>

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
                            <?php
$_from = $_smarty_tpl->tpl_vars['RFs']->value;
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
                                    <td><?php echo $_smarty_tpl->tpl_vars['RF']->value['mes'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RF']->value['ano'];?>
</td>
                                    <td>R$ <?php echo $_smarty_tpl->tpl_vars['RF']->value['valor'];?>
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
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total RF: </td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['totalRF']->value['total'];?>
</td>
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
                            <?php
$_from = $_smarty_tpl->tpl_vars['RVs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_RV_1_saved_item = isset($_smarty_tpl->tpl_vars['RV']) ? $_smarty_tpl->tpl_vars['RV'] : false;
$__foreach_RV_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['RV'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['RV']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['RV']->value) {
$_smarty_tpl->tpl_vars['RV']->_loop = true;
$__foreach_RV_1_saved_local_item = $_smarty_tpl->tpl_vars['RV'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RV']->value['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RV']->value['descricao'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RV']->value['mes'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['RV']->value['ano'];?>
</td>
                                    <td>R$ <?php echo $_smarty_tpl->tpl_vars['RV']->value['valor'];?>
</td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['RV'] = $__foreach_RV_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['RV']->_loop) {
?>    
                                <tr class="warning">    
                                    <td colspan="5">Nenhum registro encontrado...</td>
                                </tr>
                            <?php
}
if ($__foreach_RV_1_saved_item) {
$_smarty_tpl->tpl_vars['RV'] = $__foreach_RV_1_saved_item;
}
if ($__foreach_RV_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_RV_1_saved_key;
}
?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total RV: </td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['totalRV']->value['total'];?>
</td>
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
                            <?php
$_from = $_smarty_tpl->tpl_vars['DFs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_DF_2_saved_item = isset($_smarty_tpl->tpl_vars['DF']) ? $_smarty_tpl->tpl_vars['DF'] : false;
$__foreach_DF_2_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['DF'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['DF']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['DF']->value) {
$_smarty_tpl->tpl_vars['DF']->_loop = true;
$__foreach_DF_2_saved_local_item = $_smarty_tpl->tpl_vars['DF'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DF']->value['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DF']->value['descricao'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DF']->value['mes'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DF']->value['ano'];?>
</td>
                                    <td>R$ <?php echo $_smarty_tpl->tpl_vars['DF']->value['valor'];?>
</td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['DF'] = $__foreach_DF_2_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['DF']->_loop) {
?>    
                                <tr class="warning">    
                                    <td colspan="5">Nenhum registro encontrado...</td>
                                </tr>
                            <?php
}
if ($__foreach_DF_2_saved_item) {
$_smarty_tpl->tpl_vars['DF'] = $__foreach_DF_2_saved_item;
}
if ($__foreach_DF_2_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_DF_2_saved_key;
}
?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total DF: </td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['totalDF']->value['total'];?>
</td>
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
                            <?php
$_from = $_smarty_tpl->tpl_vars['DVs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_DV_3_saved_item = isset($_smarty_tpl->tpl_vars['DV']) ? $_smarty_tpl->tpl_vars['DV'] : false;
$__foreach_DV_3_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['DV'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['DV']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['DV']->value) {
$_smarty_tpl->tpl_vars['DV']->_loop = true;
$__foreach_DV_3_saved_local_item = $_smarty_tpl->tpl_vars['DV'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DV']->value['id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DV']->value['descricao'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DV']->value['mes'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['DV']->value['ano'];?>
</td>
                                    <td>R$ <?php echo $_smarty_tpl->tpl_vars['DV']->value['valor'];?>
</td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['DV'] = $__foreach_DV_3_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['DV']->_loop) {
?>    
                                <tr class="warning">    
                                    <td colspan="5">Nenhum registro encontrado...</td>
                                </tr>
                            <?php
}
if ($__foreach_DV_3_saved_item) {
$_smarty_tpl->tpl_vars['DV'] = $__foreach_DV_3_saved_item;
}
if ($__foreach_DV_3_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_DV_3_saved_key;
}
?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total DV: </td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['totalDV']->value['total'];?>
</td>
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
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['totalReceitas']->value;?>
</td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['totalDespesas']->value;?>
</td>
                                <td>R$ <?php echo $_smarty_tpl->tpl_vars['saldoperiodo']->value;?>
</td>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>



                </fieldset>
            </form>
        </div>

    </div>
</main><?php }
}
