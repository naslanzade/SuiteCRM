<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:25:15
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\ModuleBuilder\tpls\studioRelationship.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e7011b33dc38_51747116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '108c51b7d161a43a7a7a38c41d57c0821c5460e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\ModuleBuilder\\tpls\\studioRelationship.tpl',
      1 => 1709454410,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e7011b33dc38_51747116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>

<form name='relform' onsubmit='return false;'>
<input type='hidden' name='to_pdf' value='1'>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='SaveRelationship'>
<input type='hidden' name='remove_tables' value='true' id="rel_remove_tables">
<?php if (!empty($_smarty_tpl->tpl_vars['view_package']->value)) {?>
<input type='hidden' name='view_package' value='<?php echo $_smarty_tpl->tpl_vars['view_package']->value;?>
'>
<?php }?>
<input type='hidden' name='view_module' value='<?php echo $_smarty_tpl->tpl_vars['view_module']->value;?>
' />
<?php if ($_smarty_tpl->tpl_vars['rel']->value['relationship_only']) {?>
<input type='hidden' name='relationship_only' value='1'>
<?php }?>
<table style="width:100%;" class="relform">
	<tr>
		<td colspan='2' style="padding:5px 5px 15px 5px">
			<?php if (!$_smarty_tpl->tpl_vars['rel']->value['readonly']) {?>
				<?php if (empty($_smarty_tpl->tpl_vars['view_package']->value)) {?>
				<input type='button' name='saverelbtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_SAVEPUBLISH'];?>
' onclick='if(check_form("relform"))
				<?php } else { ?>
				<input type='button' name='saverelbtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_SAVE'];?>
' onclick='if(check_form("relform"))
				<?php }?>
				ModuleBuilder.submitForm("relform");' class='button'>
				<?php if (!empty($_smarty_tpl->tpl_vars['view_package']->value)) {?>
				&nbsp;
				<?php }?>
			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['rel']->value['from_studio'] || $_smarty_tpl->tpl_vars['rel']->value['readonly'] && !$_smarty_tpl->tpl_vars['is_new']->value) && $_smarty_tpl->tpl_vars['rel']->value['relationship_type'] != 'one-to-one') {?>
			<input type='button' name='saverelbtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_SAVE'];?>
' onclick='if(check_form("relform")){ this.form.action.value="SaveRelationshipLabel"; ModuleBuilder.submitForm("relform");}' class='button'>
			<?php }?>
			<input type='button' name='cancelbtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_CANCEL'];?>
' onclick='ModuleBuilder.tabPanel.removeTab(ModuleBuilder.findTabById("relEditor"));' class='button'>
            <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 3 && ($_smarty_tpl->tpl_vars['rel']->value['from_studio'] || !$_smarty_tpl->tpl_vars['rel']->value['readonly'] && !$_smarty_tpl->tpl_vars['is_new']->value)) {?>
			<input type='button' name='deleterelbtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_DELETE'];?>
' onclick='ModuleBuilder.deleteRel()' class='button'>
            <?php }?>

		</td>
	</tr>
	<?php if (empty($_smarty_tpl->tpl_vars['view_package']->value) && $_smarty_tpl->tpl_vars['rel']->value['relationship_type'] != 'one-to-one') {?>
	<tr>
		<td class='mbLBLL'>
			<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_DROPDOWN_LANGUAGE'];?>
:&nbsp;
			<?php echo smarty_function_html_options(array('name'=>'relationship_lang','id'=>'relationship_lang','options'=>$_smarty_tpl->tpl_vars['available_languages']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_lang']->value,'onchange'=>'ModuleBuilder.moduleLoadRelationship2(document.relform.relationship_name.value, null, "true");'),$_smarty_tpl);?>

		</td>
	</tr>
	<?php }?>
	<tr >
       <td>
       <?php if (!empty($_smarty_tpl->tpl_vars['rel']->value['relationship_name'])) {?>
       <span align="right" scope="row"><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REL_NAME'];?>
:&nbsp;</span><span><?php echo $_smarty_tpl->tpl_vars['rel']->value['relationship_name'];?>
</span>
       <?php }?>
       <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['relationship_name'];?>
" name="relationship_name" />
       </td>
    </tr>
	<tr><td colspan=2>
		<table class="edit view">
		    <tr><th align="center" colspan=2><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_LHS_MODULE'];?>
</th><th><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REL_TYPE'];?>
</th><th colspan=2><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_RHS_MODULE'];?>
</th></tr>
			<tr>
				<td align="right" scope="row">
				<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODULE'),$_smarty_tpl);?>
:
				</td>
				<td>
					<input name='ignore' value="<?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['module_key']->value),$_smarty_tpl);?>
" disabled >
					<input type='hidden' name='lhs_module' value='<?php echo $_smarty_tpl->tpl_vars['module_key']->value;?>
'>
				</td>
				<td>
				<?php if ($_smarty_tpl->tpl_vars['rel']->value['readonly']) {?>
                    <?php echo smarty_function_html_options(array('disabled'=>true,'name'=>"relationship_type",'id'=>"relationship_type_field",'output'=>$_smarty_tpl->tpl_vars['translated_cardinality']->value,'values'=>$_smarty_tpl->tpl_vars['cardinality']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_cardinality']->value),$_smarty_tpl);?>

				<?php } else { ?>
                    <?php echo smarty_function_html_options(array('name'=>"relationship_type",'id'=>"relationship_type_field",'output'=>$_smarty_tpl->tpl_vars['translated_cardinality']->value,'values'=>$_smarty_tpl->tpl_vars['cardinality']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_cardinality']->value,'onchange'=>'ModuleBuilder.moduleLoadRelationship2(document.relform.relationship_name.value);'),$_smarty_tpl);?>

				<?php }?>
				</td>
				<td align="right" scope="row">
				<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODULE'),$_smarty_tpl);?>
:
				</td>
				<td><?php if ($_smarty_tpl->tpl_vars['rel']->value['readonly']) {?>
					<input name="rhs_module" id="rhs_mod_field" value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['rhs_module'];?>
" disabled>
					<?php } else { ?>
                    <?php echo smarty_function_html_options(array('name'=>"rhs_module",'id'=>"rhs_mod_field",'output'=>$_smarty_tpl->tpl_vars['translated_relatable']->value,'values'=>$_smarty_tpl->tpl_vars['relatable']->value,'selected'=>$_smarty_tpl->tpl_vars['rel']->value['rhs_module'],'onchange'=>'ModuleBuilder.moduleLoadRelationship2(document.relform.relationship_name.value, true);'),$_smarty_tpl);?>

					<?php }?>
				</td>
			</tr>

            <?php if ($_smarty_tpl->tpl_vars['rel']->value['relationship_only']) {?>
                <tr>
                    <td colspan=3>
                    <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_RELATIONSHIP_ONLY'];?>

                    </td>
                </tr>
            <?php } else { ?>
						<?php if (!empty($_smarty_tpl->tpl_vars['rel']->value['rhs_module']) && $_smarty_tpl->tpl_vars['rel']->value['relationship_type'] != 'one-to-one') {?>
			<tr>
                <?php if ($_smarty_tpl->tpl_vars['rel']->value['relationship_type'] == 'many-to-many' || $_smarty_tpl->tpl_vars['rel']->value['relationship_type'] == 'many-to-one') {?>
                    <td align="right" scope="row"><?php echo smarty_function_sugar_translate(array('label'=>"LBL_REL_LABEL"),$_smarty_tpl);?>
:</td>
                    <td><input name="lhs_label" id="lhs_label" value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['lhs_label'];?>
"  ></td>
                <?php } else { ?>
                    <td></td><td><input type="hidden" name="lhs_label" id="lhs_label" value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['lhs_label'];?>
"  ></td>
                <?php }?>
                <td></td>
                <?php if ($_smarty_tpl->tpl_vars['rel']->value['relationship_type'] != 'many-to-one') {?> 
                <td align="right" scope="row"><?php echo smarty_function_sugar_translate(array('label'=>"LBL_REL_LABEL"),$_smarty_tpl);?>
:</td>
                <td><input name="rhs_label" id="rhs_label" value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['rhs_label'];?>
"  ></td>
                <?php } else { ?>
                    <td></td><td><input type="hidden" name="rhs_label" id="rhs_label" value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['rhs_label'];?>
"  ></td>
                <?php }?>
            </tr>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['rel']->value['relationship_type'] == 'many-to-many' || $_smarty_tpl->tpl_vars['rel']->value['relationship_type'] == 'many-to-one') {?>
                <td align="right" scope="row"><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_SUBPANEL_FROM'];?>
 <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['rel']->value['lhs_module']),$_smarty_tpl);?>
:</td>
                <td> <?php if ($_smarty_tpl->tpl_vars['rel']->value['readonly']) {?>
                    <input name="lhs_subpanel" id="lhs_subpanel" value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['lhs_subpanel'];?>
" disabled>
                    <?php } else { ?>
                    <?php echo smarty_function_html_options(array('name'=>"lhs_subpanel",'id'=>"lhs_subpanel",'output'=>$_smarty_tpl->tpl_vars['lhspanels']->value,'values'=>$_smarty_tpl->tpl_vars['lhspanels']->value,'selected'=>$_smarty_tpl->tpl_vars['rel']->value['lhs_subpanel'],'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_MSUB']),$_smarty_tpl);?>

                    <?php }?>
                </td>
                <?php } else { ?><td></td><td></td><?php }?>
                <td></td>
                <?php if ($_smarty_tpl->tpl_vars['rel']->value['relationship_type'] != 'many-to-one') {?> 
                <td align="right" scope="row"><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_SUBPANEL_FROM'];?>
 <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['rel']->value['rhs_module']),$_smarty_tpl);?>
:</td>
                <td>
                <?php if ($_smarty_tpl->tpl_vars['rel']->value['readonly']) {?>
                    <input name="lhs_subpanel" id="lhs_subpanel" value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['rhs_subpanel'];?>
" disabled>
                <?php } else { ?>
                    <?php echo smarty_function_html_options(array('name'=>"rhs_subpanel",'id'=>"rhs_subpanel",'output'=>$_smarty_tpl->tpl_vars['rhspanels']->value,'values'=>$_smarty_tpl->tpl_vars['rhspanels']->value,'selected'=>$_smarty_tpl->tpl_vars['rel']->value['rhs_subpanel'],'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_RSUB']),$_smarty_tpl);?>

                <?php }?>
				</td>
				<?php }?>
				
				
            </tr>
			<tr>
                                                
			<?php }?> 			<?php }?> 		</table>
	</td></tr>
</table>
</form>
<?php echo '<script'; ?>
>

ModuleBuilder.deleteRel = function()
{
    YAHOO.util.Dom.get("rel_remove_tables").value = true;
	YAHOO.SUGAR.MessageBox.show(
	{
	    type:'confirm',
		width: 300,
	    
	    msg:'<b><?php echo smarty_function_sugar_translate(array('label'=>"LBL_CONFIRM_RELATIONSHIP_DELETE"),$_smarty_tpl);?>
</b>' + 
	       "<div style='height:1em;'>&nbsp;</div><p><input type='checkbox' onclick='YAHOO.util.Dom.get(\"rel_remove_tables\").value = this.checked ? \"\" : true;' />" +
		   "&nbsp;<?php echo smarty_function_sugar_translate(array('label'=>"ML_LBL_DO_NOT_REMOVE_TABLES",'module'=>"Administration"),$_smarty_tpl);?>
</p>",
	    
	    fn: function(confirm) {
		    if (confirm == 'yes') {
		        document.forms.relform.action.value="DeleteRelationship";
			    ModuleBuilder.submitForm("relform");
			    ModuleBuilder.tabPanel.removeTab(ModuleBuilder.findTabById("relEditor"));
			}
		}
	});		
}
	
addForm('relform');
addToValidate('relform', 'label', 'varchar', true, '<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_JS_VALIDATE_REL_LABEL'];?>
');
<?php if ($_smarty_tpl->tpl_vars['fromModuleBuilder']->value) {?>
ModuleBuilder.helpSetup('relationshipsHelp','addRelationship');
<?php } else { ?>
ModuleBuilder.helpSetup('studioWizard','relationshipHelp');
<?php }?>

<?php echo '</script'; ?>
>
<?php }
}
