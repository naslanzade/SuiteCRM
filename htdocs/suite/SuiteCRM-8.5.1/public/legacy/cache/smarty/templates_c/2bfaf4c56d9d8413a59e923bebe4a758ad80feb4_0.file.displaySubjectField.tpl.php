<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:04:34
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\modules\Emails\templates\displaySubjectField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fc42d1c8f9_88899563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bfaf4c56d9d8413a59e923bebe4a758ad80feb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\modules\\Emails\\templates\\displaySubjectField.tpl',
      1 => 1709454367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e6fc42d1c8f9_88899563 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="email-subject">
    <?php if ($_smarty_tpl->tpl_vars['bean']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['bean']->value['name'] == '') {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'subject', 'subject', null);
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_SUBJECT'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'subject', 'subject', null);
echo $_smarty_tpl->tpl_vars['bean']->value['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['id']) && $_smarty_tpl->tpl_vars['bean']->value['status'] == $_smarty_tpl->tpl_vars['APP_LIST_STRINGS']->value['dom_email_status']['draft']) {?>
            <a href="index.php?module=Emails&action=DetailDraftView&record=<?php echo $_smarty_tpl->tpl_vars['bean']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</a>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['bean']->value['id']) && $_smarty_tpl->tpl_vars['bean']->value['status'] != $_smarty_tpl->tpl_vars['APP_LIST_STRINGS']->value['dom_email_status']['draft']) {?>
            <a href="index.php?module=Emails&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['bean']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</a>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['bean']->value)) {?>
            <a href="index.php?module=Emails&action=DisplayDetailView&folder_name=<?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['folder'])) {
echo $_smarty_tpl->tpl_vars['bean']->value['folder'];
}?>&folder=<?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['folder_type'])) {
echo $_smarty_tpl->tpl_vars['bean']->value['folder_type'];
}?>&inbound_email_record=<?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['inbound_email_record'])) {
echo $_smarty_tpl->tpl_vars['bean']->value['inbound_email_record'];
}?>&uid=<?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['uid'])) {
echo $_smarty_tpl->tpl_vars['bean']->value['uid'];
}?>&msgno=<?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['msgno'])) {
echo $_smarty_tpl->tpl_vars['bean']->value['msgno'];
}?>"><?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
</a>
        <?php }?>
    <?php }?>
</div>
<?php }
}
