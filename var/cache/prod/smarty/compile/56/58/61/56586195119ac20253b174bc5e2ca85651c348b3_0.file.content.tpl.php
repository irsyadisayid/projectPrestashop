<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-10 20:00:02
  from 'C:\xampp\htdocs\umaracing\adminpanel\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffafa5286f275_20956061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56586195119ac20253b174bc5e2ca85651c348b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\umaracing\\adminpanel\\themes\\default\\template\\content.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffafa5286f275_20956061 (Smarty_Internal_Template $_smarty_tpl) {
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
