<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:04:35
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\Emails\templates\displayHasAttachmentField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fc4333be94_04023277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b341e049c287fb2041638010848bf40050120e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\Emails\\templates\\displayHasAttachmentField.tpl',
      1 => 1709454367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e6fc4333be94_04023277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<div class="email-has-attachement">
    <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value)) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['has_attachment'])) {?>
            <div class="email-has-attachment"><span class="glyphicon"><img src="<?php echo smarty_function_sugar_getimagepath(array('directory'=>'','file_name'=>'attachment-indicator','file_extension'=>"svg",'file'=>'attachment-indicator.svg'),$_smarty_tpl);?>
"/></span></div>
        <?php }?>

    <?php }?>
</div>
<?php }
}
