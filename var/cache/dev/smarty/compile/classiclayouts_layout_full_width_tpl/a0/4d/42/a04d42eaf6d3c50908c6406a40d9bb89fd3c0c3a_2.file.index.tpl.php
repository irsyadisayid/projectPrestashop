<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 16:22:16
  from '/home/insd8686/public_html/irsyadisayid/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffd6a48d1b899_64384371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a04d42eaf6d3c50908c6406a40d9bb89fd3c0c3a' => 
    array (
      0 => '/home/insd8686/public_html/irsyadisayid/themes/classic/templates/index.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd6a48d1b899_64384371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7564577035ffd6a48d17f36_75850845', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15675518135ffd6a48d18858_19422537 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_10878492095ffd6a48d19c01_65211246 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_549363415ffd6a48d19468_16371903 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10878492095ffd6a48d19c01_65211246', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7564577035ffd6a48d17f36_75850845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_7564577035ffd6a48d17f36_75850845',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15675518135ffd6a48d18858_19422537',
  ),
  'page_content' => 
  array (
    0 => 'Block_549363415ffd6a48d19468_16371903',
  ),
  'hook_home' => 
  array (
    0 => 'Block_10878492095ffd6a48d19c01_65211246',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15675518135ffd6a48d18858_19422537', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_549363415ffd6a48d19468_16371903', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
