<?php
/* Smarty version 3.1.29, created on 2016-02-26 14:22:32
  from "/var/www/html/ControleDeGastosMaterialDesign/view/login/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d089d891ad77_94068419',
  'file_dependency' => 
  array (
    '93dd63d7f85f1e9d0b4e5865135d990b77a6ae8d' => 
    array (
      0 => '/var/www/html/ControleDeGastosMaterialDesign/view/login/index.tpl',
      1 => 1456507041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d089d891ad77_94068419 ($_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['header']->value;?>

<link href="../../files/material/material.min.login.css" rel="stylesheet" type="text/css"/>
<link href="../../files/material/login.css" rel="stylesheet" type="text/css"/>


<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            </div>
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                <h3>Sistema de Controle de Estoque</h3>
            </div>
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                <a href="#overview" class="mdl-layout__tab is-active">Overview</a>

            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="mdl-layout__tab-panel is-active" id="overview">

                <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                    <div class="mdl-card mdl-cell mdl-cell--12-col">
                        <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                            <h4 class="mdl-cell mdl-cell--12-col">Login</h4>

                            <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                                <form class="form-group-lg" action="login.php?logar=try" method="post">
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email">
                                    </div>
                                    <br>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon" id="sizing-addon1"></span>
                                        <input type="password" name="pass" id="pass" class="form-control" placeholder="******" aria-describedby="sizing-addon1">
                                    </div>
                                    <br>
                                    <div class="input-group input-group-lg">
                                        <span class="" id="sizing-addon1"></span>
                                        <input type="submit" class="btn btn-default">
                                    </div>



                                </form>
                            </div>

                        </div>
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn2">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn2">
                            <li class="mdl-menu__item">Lorem</li>
                            <li class="mdl-menu__item" disabled>Ipsum</li>
                            <li class="mdl-menu__item">Dolor</li>
                        </ul>
                </section>
            </div>
            <div class="mdl-layout__tab-panel" id="features">

            </div>
        </main>
    </div>
    <a href="https://github.com/google/material-design-lite/blob/master/templates/text-only/" target="_blank" id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">View Source</a>
    <?php echo '<script'; ?>
 src="https://code.getmdl.io/1.1.1/material.min.js"><?php echo '</script'; ?>
>
</body><?php }
}
