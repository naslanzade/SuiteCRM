<?php
/* Smarty version 4.3.2, created on 2024-03-05 12:04:31
  from 'C:\xampp\htdocs\suite\SuiteCRM-8.5.1\public\legacy\themes\suite8\tpls\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65e6fc3fd2b0a8_71662924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff1d5b3d5fa256149b2a0040cda197d6d50c5d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\suite\\SuiteCRM-8.5.1\\public\\legacy\\themes\\suite8\\tpls\\footer.tpl',
      1 => 1709454602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e6fc3fd2b0a8_71662924 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
</div>
<!-- END of container-fluid, pageContainer divs -->
<!-- END Footer Section -->

    <?php echo '<script'; ?>
>
        SUGAR_callsInProgress++;
        SUGAR._ajax_hist_loaded = true;
        if (SUGAR.ajaxUI)
            YAHOO.util.Event.onContentReady('ajaxUI-history-field', SUGAR.ajaxUI.firstLoad);

        $(function(){

            // fix for campaign wizard
            if($('#wizard').length) {

                // footer fix
                var bodyHeight = $('body').height();
                var contentHeight = $('#pagecontent').height() + $('#wizard').height();
                var fieldsetHeight = $('#pagecontent').height() + $('#wizard fieldset').height();
                var height = bodyHeight < contentHeight ? contentHeight : bodyHeight;
                if(fieldsetHeight > height) {
                    height = fieldsetHeight;
                }
                height += 50;
                $('#content').css({
                    'min-height': height + 'px'
                });

                // uploader fix
                $('#step1_uploader').css({
                    position: 'relative',
                    top: ($('#wizard').height() - 90) + 'px'
                });
            }
        });

    <?php echo '</script'; ?>
>

<div class="modal fade modal-generic" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="title-generic"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_GENERATE_PASSWORD_BUTTON_TITLE'];?>
</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL'];?>
</button>
                <button id="btn-generic" class="btn btn-danger" type="button"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_OK'];?>
</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
</body>
</html>
<?php }
}
