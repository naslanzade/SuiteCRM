<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:12:27
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\Emails\templates\_baseConfigData.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fe1b94d297_98181372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d0cf496ee40255e7a91d5f36e14b50571b1c1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\Emails\\templates\\_baseConfigData.tpl',
      1 => 1709454366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e6fe1b94d297_98181372 (Smarty_Internal_Template $_smarty_tpl) {
?>
SUGAR.email2.composeLayout.charsets = <?php echo $_smarty_tpl->tpl_vars['emailCharsets']->value;?>
;
SUGAR.default_inbound_accnt_id = '<?php echo $_smarty_tpl->tpl_vars['defaultOutID']->value;?>
';
if(!SUGAR.email2.userPrefs) {
    var userPrefs = SUGAR.email2.userPrefs = <?php echo $_smarty_tpl->tpl_vars['userPrefs']->value;?>
;
}
SUGAR.email2.signatures = <?php echo $_smarty_tpl->tpl_vars['defaultSignature']->value;?>
;
<?php echo $_smarty_tpl->tpl_vars['tinyMCE']->value;?>

linkBeans = <?php echo $_smarty_tpl->tpl_vars['linkBeans']->value;?>
;
<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>

<?php }
}
