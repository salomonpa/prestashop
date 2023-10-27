<?php
/* Smarty version 4.3.1, created on 2023-10-27 15:01:25
  from 'C:\xampp\htdocs\prestashop\modules\klaviyopsautomation\views\templates\admin\config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_653bb4a5143582_13995729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a30b5f51197e2adb0a1a29f9c08f991a3d056352' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\klaviyopsautomation\\views\\templates\\admin\\config.tpl',
      1 => 1697795490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_653bb4a5143582_13995729 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="klaviyo-container">
    <?php echo $_smarty_tpl->tpl_vars['psAccounts']->value;?>


    <div id="klaviyo-config">
        <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['orderStatusMapForm']->value;?>

        <?php echo $_smarty_tpl->tpl_vars['couponsGenerator']->value;?>

    </div>

    <?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['chunkVendorJs']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adminConfigJs']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
</div>
<?php }
}
