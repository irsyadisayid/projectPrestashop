<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-12 16:22:16
  from '/home/insd8686/public_html/irsyadisayid/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffd6a48d265b5_59121823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd7da229cd43aa74951d348eb3044dcfa82d47da' => 
    array (
      0 => '/home/insd8686/public_html/irsyadisayid/themes/classic/templates/page.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffd6a48d265b5_59121823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12756225735ffd6a48d1f694_41844506', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_3914296845ffd6a48d20962_01191564 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_19905656515ffd6a48d1fe85_58757511 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3914296845ffd6a48d20962_01191564', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6875275595ffd6a48d23025_12034961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18303449575ffd6a48d23b65_66393077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1566321555ffd6a48d22879_37474279 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6875275595ffd6a48d23025_12034961', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18303449575ffd6a48d23b65_66393077', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_671612055ffd6a48d252f8_40713206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_5126954405ffd6a48d24b93_40848445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_671612055ffd6a48d252f8_40713206', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12756225735ffd6a48d1f694_41844506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12756225735ffd6a48d1f694_41844506',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_19905656515ffd6a48d1fe85_58757511',
  ),
  'page_title' => 
  array (
    0 => 'Block_3914296845ffd6a48d20962_01191564',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1566321555ffd6a48d22879_37474279',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6875275595ffd6a48d23025_12034961',
  ),
  'page_content' => 
  array (
    0 => 'Block_18303449575ffd6a48d23b65_66393077',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_5126954405ffd6a48d24b93_40848445',
  ),
  'page_footer' => 
  array (
    0 => 'Block_671612055ffd6a48d252f8_40713206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19905656515ffd6a48d1fe85_58757511', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1566321555ffd6a48d22879_37474279', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5126954405ffd6a48d24b93_40848445', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
