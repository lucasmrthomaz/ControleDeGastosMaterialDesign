<?php
/* Smarty version 3.1.29, created on 2016-02-13 22:40:08
  from "/var/www/htdocs/estoque-php-oop/view/departamento/novo.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56bfcce83dc5c0_87813058',
  'file_dependency' => 
  array (
    '8608914a9538aa8ce8143f1bf18d4ed1234c8f95' => 
    array (
      0 => '/var/www/htdocs/estoque-php-oop/view/departamento/novo.tpl',
      1 => 1455410405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56bfcce83dc5c0_87813058 ($_smarty_tpl) {
?>
<form class="form-horizontal" role="form" action="cad_dep.php?acao=salvar" 
      method="post" 
      style="background-color: grey">
     <h2>Novo Departamento</h2>
    
  <div class="form-group">
    <label class="control-label col-sm-2" for="descricao">Descrição:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Enter the description">
    </div>
  </div>
   
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Inserir</button>
    </div>
  </div>
</form><?php }
}
