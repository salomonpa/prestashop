<?php
/* Smarty version 4.3.1, created on 2023-10-27 15:01:24
  from 'C:\xampp\htdocs\prestashop\modules\klaviyopsautomation\views\templates\admin\ps_accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653bb4a4eff3c2_68811992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abe6c720844be203fbef007a8e5035092e1c1299' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\klaviyopsautomation\\views\\templates\\admin\\ps_accounts.tpl',
      1 => 1697795490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653bb4a4eff3c2_68811992 (Smarty_Internal_Template $_smarty_tpl) {
?><div
    id="klaviyops-admin-config-vuejs"
    data-vue="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['vueData']->value )),'htmlall','UTF-8' ));?>
"
></div>

<?php if (!$_smarty_tpl->tpl_vars['vueData']->value['psAccountsError']) {?>
    <?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['urlAccountsCdn']->value,'htmlall','UTF-8' ));?>
" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
}
