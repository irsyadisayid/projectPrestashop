<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 16:22:13
  from '/home/insd8686/public_html/irsyadisayid/adminpanel/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffd6a45ddbfd3_74389276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3333fcc841c7497f4620c880e2789da91c11aaf7' => 
    array (
      0 => '/home/insd8686/public_html/irsyadisayid/adminpanel/themes/default/template/content.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd6a45ddbfd3_74389276 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
