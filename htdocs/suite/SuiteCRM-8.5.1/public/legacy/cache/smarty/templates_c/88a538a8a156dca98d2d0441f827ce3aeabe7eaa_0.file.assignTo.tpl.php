<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:12:30
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\Emails\templates\assignTo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fe1e5281a9_46730547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88a538a8a156dca98d2d0441f827ce3aeabe7eaa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\Emails\\templates\\assignTo.tpl',
      1 => 1709454367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e6fe1e5281a9_46730547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>
<form name="Distribute" id="Distribute">
<input type="hidden" name="emailUIAction" value="doAssignmentAssign">

<input type="hidden" name="distribute_method" value="direct">
<input type="hidden" name="action" value="Distribute">


<table cellpadding="4" cellspacing="0" border="0"  class="edit view">
    <tr>
        <td scope="row" nowrap="nowrap" valign="top" >
        <?php echo smarty_function_sugar_translate(array('label'=>"LBL_ASSIGNED_TO"),$_smarty_tpl);?>
:
        </td>
        <td nowrap="nowrap" >
        <input name="assigned_user_name" class="sqsEnabled" tabindex="2" id="assigned_user_name" size="" value="<?php echo $_smarty_tpl->tpl_vars['currentUserName']->value;?>
" type="text">
        <input name="assigned_user_id" id="assigned_user_id" value="<?php echo $_smarty_tpl->tpl_vars['currentUserId']->value;?>
" type="hidden">
        <input name="btn_assigned_user_name" tabindex="2" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SELECT_BUTTON_TITLE'];?>
" class="button" value="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SELECT_BUTTON_LABEL'];?>
" onclick='open_popup("Users", 600, 400, "", true, false, {"call_back_function":"set_return","form_name":"Distribute","field_to_name_array":{"id":"assigned_user_id","name":"assigned_user_name"}}, "single", true);' type="button">
        <input name="btn_clr_assigned_user_name" tabindex="2" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_CLEAR_BUTTON_TITLE'];?>
" class="button" onclick="this.form.assigned_user_name.value = ''; this.form.assigned_user_id.value = '';" value="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_CLEAR_BUTTON_LABEL'];?>
" type="button">
        </td>
        <td>&nbsp;</td>
    </tr>
    <tr><td>&nbsp</td><td>&nbsp</td></tr>
    <tr>
    	   <td>&nbsp;</td>
    	   <td>&nbsp;</td>
    	   <td align="right"><input type="button" class="button" style="margin-left:5px;" value="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BUTTON_DISTRIBUTE'];?>
" onclick="AjaxObject.detailView.handleAssignmentDialogAssignAction();"></td>
    </tr>
</table>

</form>

<?php }
}
