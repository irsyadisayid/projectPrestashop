<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 18:20:27
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffd85fb8bd745_84226398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03235412c82fe3af55539163b9c3686a7a1ffea4' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1610443211,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd85fb8bd745_84226398 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/insd8686/public_html/irsyadisayid/modules/productcomments/views/templates/hook/average-grade-stars.tpl -->
<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
  <div class="comments-note">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grade','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
    <div class="grade-stars" data-grade="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grade']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
  </div>
<?php }?>
<!-- end /home/insd8686/public_html/irsyadisayid/modules/productcomments/views/templates/hook/average-grade-stars.tpl --><?php }
}
