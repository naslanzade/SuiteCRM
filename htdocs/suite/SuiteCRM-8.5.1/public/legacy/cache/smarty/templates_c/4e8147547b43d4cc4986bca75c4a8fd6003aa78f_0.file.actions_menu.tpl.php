<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:04:31
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\themes\suite8\include\MySugar\tpls\actions_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fc3fab86e9_96109679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e8147547b43d4cc4986bca75c4a8fd6003aa78f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\themes\\suite8\\include\\MySugar\\tpls\\actions_menu.tpl',
      1 => 1709454599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e6fc3fab86e9_96109679 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="dropdown-menu tab-actions">
    <?php if (!$_smarty_tpl->tpl_vars['lock_homepage']->value) {?>

        <li>
            <input class="button addDashlets" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashlet" value="<?php echo $_smarty_tpl->tpl_vars['lblAddDashlets']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-add-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['lblAddTab']->value;?>
">
        </li>
        <li>
            <input class="button addDashboard" type="button" name="Edit"  data-toggle="modal" data-target=".modal-edit-dashboard" value="<?php echo $_smarty_tpl->tpl_vars['app']->value['LBL_EDIT_TAB'];?>
">
        </li>
    <?php }?>
</ul>
<?php }
}
