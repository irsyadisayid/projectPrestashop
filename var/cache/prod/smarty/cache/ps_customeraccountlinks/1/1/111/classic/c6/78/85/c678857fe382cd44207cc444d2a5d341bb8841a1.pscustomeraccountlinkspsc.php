<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-10 17:59:47
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffade23742205_82799478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1606918382,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5ffade23742205_82799478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/umaracing/akun-saya" rel="nofollow">
      Akun Anda
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Akun Anda</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/umaracing/identitas" title="Data pribadi" rel="nofollow">
            Data pribadi
          </a>
        </li>
            <li>
          <a href="http://localhost/umaracing/riwayat-pembelian" title="Penjualan" rel="nofollow">
            Penjualan
          </a>
        </li>
            <li>
          <a href="http://localhost/umaracing/slip-order" title="Nota Kredit" rel="nofollow">
            Nota Kredit
          </a>
        </li>
            <li>
          <a href="http://localhost/umaracing/daftar-alamat" title="Alamat" rel="nofollow">
            Alamat
          </a>
        </li>
        
	</ul>
</div>
<?php }
}
