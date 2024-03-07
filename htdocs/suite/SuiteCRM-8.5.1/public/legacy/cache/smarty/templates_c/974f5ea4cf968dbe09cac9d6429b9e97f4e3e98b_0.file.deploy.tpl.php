<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:06:46
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\ModuleBuilder\tpls\MBPackage\deploy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fcc6bf0d40_98022085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '974f5ea4cf968dbe09cac9d6429b9e97f4e3e98b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\ModuleBuilder\\tpls\\MBPackage\\deploy.tpl',
      1 => 1709454411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e6fcc6bf0d40_98022085 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
echo smarty_function_sugar_getimage(array('name'=>"img_loading",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_LOADING'],'ext'=>".gif",'other_attributes'=>'align="absmiddle" '),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['package']->value;?>

<?php echo '<script'; ?>
 type='text/javascript' language='Javascript'>ModuleBuilder.beginDeploy('<?php echo $_smarty_tpl->tpl_vars['package']->value;?>
');<?php echo '</script'; ?>
>	
<?php }
}
