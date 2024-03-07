<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:12:28
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\Emails\templates\emailSettingsAccounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fe1c9fe8a8_99446430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c719f1da0920f0dce550e91371e7325280a731c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\Emails\\templates\\emailSettingsAccounts.tpl',
      1 => 1709454367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Emails/templates/emailSettingsAccountDetails.tpl' => 1,
  ),
),false)) {
function content_65e6fe1c9fe8a8_99446430 (Smarty_Internal_Template $_smarty_tpl) {
?><table cellpadding="4" cellspacing="0" border="0" width="100%" class="view">
	<tr>
		<td NOWRAP>
			<?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsAccountDetails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</td>
	</tr>
    	<tr>
                                	<td align="right">
                                	   <input type="button" class="button" style="margin-left:5px;" value="   <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_DONE_BUTTON_LABEL'];?>
   " onclick="javascript:SUGAR.email2.settings.saveOptionsGeneral(true);">
                                    </td>
                            	</tr>
	

</table>
<?php }
}
