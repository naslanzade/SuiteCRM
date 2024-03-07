<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:12:27
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\Emails\templates\overlay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fe1bb8f047_36925325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53a7408a6b3a775b689cfd233c45a76786dd8f03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\Emails\\templates\\overlay.tpl',
      1 => 1709454368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e6fe1bb8f047_36925325 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="SUGAR.email2.e2overlay" style="visibility:hidden; position:absolute; top:0px; background-color:#fff;">
	<div class="ydlg-hd" id="overlayTitle"></div>
	<div class="ydlg-bd" id="overlayBody"></div>
</div>

<!-- add file for attachment dialog //-->
<div id="addFileDialog" class="yui-hidden">
	<div class="ydlg-bd">
		<div id="addFileDialogContent" class="ylayout-inactive-content">
			<!--  -->
			<form id="uploadAttachment" name="uploadAttachment" method='POST' action="index.php" enctype='multipart/form-data'>
				<input type="hidden" name="to_pdf" value="true">
				<input type="hidden" name="module" value="Emails">
				<input type="hidden" name="action" value="EmailUIAjax">
				<input type="hidden" name="emailUIAction" value="uploadAttachment">
				<input type='file' name='email_attachment' id='email_attachment' size='30' />&nbsp;
				<input type="button" onclick="SUGAR.email2.composeLayout.uploadAttachment();" class="button" value="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_ATTACH_FILE_TO_EMAIL'];?>
" />
			</form>
		</div>
	</div>
</div>
<?php }
}
