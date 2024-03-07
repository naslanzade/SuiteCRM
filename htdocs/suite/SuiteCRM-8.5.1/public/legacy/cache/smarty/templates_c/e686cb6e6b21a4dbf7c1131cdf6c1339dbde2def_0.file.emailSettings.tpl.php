<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:12:28
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\Emails\templates\emailSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fe1c2acb74_39761362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e686cb6e6b21a4dbf7c1131cdf6c1339dbde2def' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\Emails\\templates\\emailSettings.tpl',
      1 => 1709454367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Emails/templates/emailSettingsGeneral.tpl' => 1,
    'file:modules/Emails/templates/emailSettingsAccounts.tpl' => 1,
  ),
),false)) {
function content_65e6fe1c2acb74_39761362 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ydlg-bd">
    <div id="tab_general" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsGeneral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div id="tab_accounts" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsAccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>


</div><?php }
}
