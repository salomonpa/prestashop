<?php
/* Smarty version 4.3.1, created on 2023-10-27 11:06:54
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653b7daee32829_83693727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1671890849,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_653b7daee32829_83693727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\08\\39\\b4\\0839b4f781e4562a087a5e1991febe8a6e755e36_2.file.helpers.tpl.php',
    'uid' => '0839b4f781e4562a087a5e1991febe8a6e755e36',
    'call_name' => 'smarty_template_function_renderLogo_1549103791653b7daa6dfd33_35366811',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop/fr/mon-compte" rel="nofollow">
      Votre compte
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Votre compte</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost/prestashop/fr/identite" title="Informations" rel="nofollow">Informations</a></li>
                  <li><a href="http://localhost/prestashop/fr/adresses" title="Adresses" rel="nofollow">Adresses</a></li>
                          <li><a href="http://localhost/prestashop/fr/historique-commandes" title="Commandes" rel="nofollow">Commandes</a></li>
                          <li><a href="http://localhost/prestashop/fr/avoirs" title="Avoirs" rel="nofollow">Avoirs</a></li>
                                  <li>
    <a href="http://localhost/prestashop/fr/module/blockwishlist/lists" title="My wishlists" rel="nofollow">
      Liste d&#039;envies
    <a>
  </li>

        <li><a href="http://localhost/prestashop/fr/?mylogout=" title="Me déconnecter" rel="nofollow">Déconnexion</a></li>
       
	</ul>
</div>
<?php }
}
