<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:12:44
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\Reminders\tpls\remindersDefaults.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fe2ce4e4a9_58193813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65aeec0348d3ad298bf5327c5700c57771c8eecd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\Reminders\\tpls\\remindersDefaults.tpl',
      1 => 1709454441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e6fe2ce4e4a9_58193813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


<style type="text/css">

</style>

	<?php if ($_smarty_tpl->tpl_vars['fields']->value['reminder_time']) {?>            	
            	
            	<?php $_smarty_tpl->_assignInScope('REMINDER_TIME_OPTIONS', $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options']);?>
            	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME_OPTIONS', $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options']);?>	
            	
            	<?php if (!$_smarty_tpl->tpl_vars['fields']->value['reminder_checked']['value']) {?>            		
            		<?php $_smarty_tpl->_assignInScope('REMINDER_TIME', -1);?>
            	<?php } else { ?>
            		<?php $_smarty_tpl->_assignInScope('REMINDER_TIME', $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['value']);?>
            	<?php }?>
            	<?php if (!$_smarty_tpl->tpl_vars['fields']->value['email_reminder_checked']['value']) {?>            		
            		<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME', -1);?>
            	<?php } else { ?>
            		<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME', $_smarty_tpl->tpl_vars['fields']->value['email_reminder_time']['value']);?>
            	<?php }?>
	<?php }?>
	
	<?php $_smarty_tpl->_assignInScope('REMINDER_TIME_DISPLAY', "none");?>
	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME_DISPLAY', "none");?>
	<?php if ($_smarty_tpl->tpl_vars['REMINDER_TIME']->value != -1) {?>
            	            	<?php $_smarty_tpl->_assignInScope('REMINDER_TIME_DISPLAY', "inline");?>	
	<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value != -1) {?>
            	            	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME_DISPLAY', "inline");?>
        <?php }?>


<?php if ($_smarty_tpl->tpl_vars['view']->value == "EditView" || $_smarty_tpl->tpl_vars['view']->value == "QuickCreate" || $_smarty_tpl->tpl_vars['view']->value == "QuickEdit") {
} else { ?>
	<?php $_smarty_tpl->_assignInScope('disabled', "disabled");
}?>


<!-- Reminders field default in EditViews -->
<div id="reminders">

	<?php if (!$_smarty_tpl->tpl_vars['disabled']->value) {?>
		<div class="col">
			<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDERS_ACTIONS'];?>
</span>&nbsp;
		</div>
	<?php }?>

	<div class="col">
		<input name="reminder_checked" type="hidden" value="0">
		<input name="reminder_checked" type="checkbox" class="popup_chkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['REMINDER_CHECKED']->value) {?> checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
		<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDERS_POPUP'];?>
</span>&nbsp;

		<?php if (!$_smarty_tpl->tpl_vars['disabled']->value) {?>
			<br>
			<!-- <span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDERS_WHEN'];?>
</span> -->
			<select tabindex="0" class="popup_timer_sel" name="reminder_time"<?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['REMINDER_TIME']->value),$_smarty_tpl);?>

			</select>
			<br>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value[$_smarty_tpl->tpl_vars['REMINDER_TIME']->value];?>

		<?php }?>
	</div>

	<div class="col">
		<input name="email_reminder_checked" type="hidden" value="0">
		<input name="email_reminder_checked" type="checkbox" class="email_chkbox" value="1"<?php if ($_smarty_tpl->tpl_vars['EMAIL_REMINDER_CHECKED']->value) {?> checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
		<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDERS_EMAIL'];?>
</span>&nbsp;

		<?php if (!$_smarty_tpl->tpl_vars['disabled']->value) {?>
			<!-- <span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDERS_WHEN'];?>
</span> -->
			<br>
			<select tabindex="0" class="email_timer_sel" name="email_reminder_time"<?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value),$_smarty_tpl);?>

			</select>
			<br>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value[$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value];?>

		<?php }?>
	</div>

</div>


<?php echo '<script'; ?>
 type="text/javascript">

	$(function(){
		
	});

<?php echo '</script'; ?>
>





<?php }
}
