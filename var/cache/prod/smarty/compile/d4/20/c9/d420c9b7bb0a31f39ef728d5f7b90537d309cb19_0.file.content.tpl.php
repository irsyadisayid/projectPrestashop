<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-10 20:03:12
  from 'C:\xampp\htdocs\umaracing\adminpanel\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffafb1066aec5_44591688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd420c9b7bb0a31f39ef728d5f7b90537d309cb19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\umaracing\\adminpanel\\themes\\new-theme\\template\\content.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffafb1066aec5_44591688 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
