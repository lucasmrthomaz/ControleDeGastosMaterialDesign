<?php
/* Smarty version 3.1.29, created on 2016-02-15 09:16:13
  from "/var/www/htdocs/estoque-php-oop/view/produtos/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c1b37dd7a1c8_06674599',
  'file_dependency' => 
  array (
    'f96adb505adc26c663217d0ef4c2d028475294b6' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/produtos/index.tpl',
      1 => 1455534733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:comum/topo.tpl' => 1,
    'file:comum/base.tpl' => 1,
  ),
),false)) {
function content_56c1b37dd7a1c8_06674599 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1> Cadastro de Produtos</h1>                  
                <?php if ($_smarty_tpl->tpl_vars['mensagem']->value != '') {?>
                <div class="alert alert-danger" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" 
                        aria-hidden="true"></span>
                  <span class="sr-only">Aviso:</span>
                  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['mensagem']->value)===null||$tmp==='' ? '' : $tmp);?>

                </div>
                <?php }?>
                <div class="row">
                    
                  <?php echo $_smarty_tpl->tpl_vars['frm_novo']->value;?>

                
                </div>
                <div class="row"><?php echo $_smarty_tpl->tpl_vars['grid']->value;?>
</div>


            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
