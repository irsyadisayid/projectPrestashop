<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 16:22:16
  from '/home/insd8686/public_html/irsyadisayid/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffd6a48cc4b09_48926513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b1a3c2f47fe769f91aa43d46486eb5b71e7f9ab' => 
    array (
      0 => '/home/insd8686/public_html/irsyadisayid/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd6a48cc4b09_48926513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '3097354845ffd6a48cc0475_47528830';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20411163915ffd6a48cc1316_85974027', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_20411163915ffd6a48cc1316_85974027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_20411163915ffd6a48cc1316_85974027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
