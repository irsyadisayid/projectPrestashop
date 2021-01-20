<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__8cb9724fcbb987086b83bbb078ec36628407d23dbb01b60ecf3a6d0c1ac5c86d */
class __TwigTemplate_66e3a524f93b84dbd306a194e3ee42dcf8d0186cf723412fb4f330b1b353b261 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/umaracing/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/umaracing/img/app_icon.png\" />

<title>Katalog Modul • umaracing</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsMboModule';
    var iso_user = 'id';
    var lang_is_rtl = '0';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.7.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Pembelian baru di toko Anda.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'Pelanggan baru yang terdaftar.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'Ada pesan baru di toko Anda.';
    var see_msg = 'Baca pesan';
    var token = '6eff0eeb96180a7c0a86a5889be2e8a5';
    var token_admin_orders = '322307a96863de7000c799974693d59d';
    var token_admin_customers = 'a7dc75408d4a300710a95743fee9b50e';
    var token_admin_customer_threads = '6898002336e6b29bbf4aa0c8f302c166';
    var currentIndex = 'index.php?controller=AdminPsMboModule';
    var employee_token = '43e24d311977a8da28e19eb78a89ab69';
    var choose_language_translate = 'Pilih Bahasa:';
    var default_language = '1';
    var admin_modules_link = '/umaracing/adminpanel/index.php/improve/modules/catalog/recommended?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE';
    var admin_notification_get_link = '/umaracing/adminpanel/index.php/common/notifications?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE';
    var admin_notification_push_link = '/umaracing/adminpanel/index.php/common/notifications/ack?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE';
    var tab_modules_list = '';
    var update_success_msg = 'update berhasil';
    var errorLogin = 'PrestaShop tidak dapat login ke Addons. Harap cek login dan koneksi internet Anda.';
    var search_product_msg = 'Cari produk';
  </script>

      <link href=\"/umaracing/adminpanel/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/umaracing/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/umaracing/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/umaracing/adminpanel/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/umaracing/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/umaracing/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/umaracing/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/umaracing\\/adminpanel\\/\";
var baseDir = \"\\/umaracing\\/\";
var changeFormLanguageUrl = \"\\/umaracing\\/adminpanel\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/umaracing/adminpanel/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/js/admin.js?v=1.7.7.0\"></script>
<script type=\"text/javascript\" src=\"/umaracing/adminpanel/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/js/tools.js?v=1.7.7.0\"></script>
<script type=\"text/javascript\" src=\"/umaracing/adminpanel/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/adminpanel/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/umaracing/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/umaracing/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/umaracing/adminpanel/index.php/common/notifications?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/umaracing\\/adminpanel\\/index.php?controller=AdminGamification&token=bd1b9a6d1e09ae3e58b5826e4883fa8f\";
            var current_id_tab = 134;
        </script>

";
        // line 104
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-id adminpsmbomodule\"
  data-base-url=\"/umaracing/adminpanel/index.php\"  data-token=\"ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminDashboard&amp;token=6cce3d56c73348fb85797dcd36fb35ec\"></a>
      <span id=\"shop_version\">1.7.7.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=7c82e57e3c0ecd8de20b55caa88d1ba3\"
                 data-item=\"Katalog evaluasi\"
      >Katalog evaluasi</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/umaracing/adminpanel/index.php/sell/catalog/categories/new?token=9babf35eee057f2af883b17db3355783\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/umaracing/adminpanel/index.php/improve/modules/manage?token=9babf35eee057f2af883b17db3355783\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminOrders&amp;token=322307a96863de7000c799974693d59d\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/umaracing/adminpanel/index.php/sell/catalog/products/new?token=9babf35eee057f2af883b17db3355783\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=19941e62f0055b05ed9775919f775b8d\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"152\"
        data-icon=\"icon-AdminParentModulesCatalog\"
        data-method=\"add\"
        data-url=\"index.php/modules/addons/modules/catalog?-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\"
        data-post-link=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminQuickAccesses&token=272ed52142b4300522e08166c1fb0e36\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Katalog Modul - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminQuickAccesses&token=272ed52142b4300522e08166c1fb0e36\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/umaracing/adminpanel/index.php?controller=AdminSearch&amp;token=0244c3efb4e4adbf0885e1f27f8cdc54\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Nama\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor invoice\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modul</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CARI</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/umaracing/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Lihat toko
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pesanan<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Pelanggan<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Bagaimana dengan sedikit diskon musiman?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Aktifkah Anda di media sosial akhir-akhir ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Tampaknya semua pelanggan Anda senang :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/irsyadi.sayid879%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Irsyadi</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/umaracing/adminpanel/index.php/configure/advanced/employees/1/edit?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\">
      <i class=\"material-icons\">settings</i>
      Profile Anda
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Pelatihan</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Prestashop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminLogin&amp;logout=1&amp;token=2241d3c87d12a9dd7ba49ee67388eb22\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Keluar</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/umaracing/adminpanel/index.php/configure/advanced/employees/toggle-navigation?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminDashboard&amp;token=6cce3d56c73348fb85797dcd36fb35ec\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Jual</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/umaracing/adminpanel/index.php/sell/orders/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Penjualan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/orders/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Penjualan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/orders/invoices/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Invoice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/orders/credit-slips/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Nota kredit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/orders/delivery-slips/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Nota pengiriman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminCarts&amp;token=70576bce15aa68b657b79b7e7a999662\" class=\"link\"> Daftar belanja
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/umaracing/adminpanel/index.php/sell/catalog/products?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/catalog/products?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/catalog/categories?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Kategori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/catalog/monitoring/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminAttributesGroups&amp;token=5b241fee6b190b0d2434279242cd7856\" class=\"link\"> Atribut dan Fitur
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/catalog/brands/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Brand dan Supplier
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/attachments/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminCartRules&amp;token=19941e62f0055b05ed9775919f775b8d\" class=\"link\"> Diskon
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/stocks/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/umaracing/adminpanel/index.php/sell/customers/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/customers/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/addresses/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Alamat
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminCustomerThreads&amp;token=6898002336e6b29bbf4aa0c8f302c166\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Layanan Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminCustomerThreads&amp;token=6898002336e6b29bbf4aa0c8f302c166\" class=\"link\"> Layanan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/umaracing/adminpanel/index.php/sell/customer-service/order-messages/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Pesan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminReturn&amp;token=f3a2aa024b242a7e1990098084fb5a24\" class=\"link\"> Retur barang
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminStats&amp;token=7c82e57e3c0ecd8de20b55caa88d1ba3\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistik
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Peningkatan</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/umaracing/adminpanel/index.php/improve/modules/manage?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modul
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/modules/manage?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/umaracing/adminpanel/index.php/modules/addons/modules/catalog?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Katalog Modul
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/umaracing/adminpanel/index.php/improve/design/themes/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Desain
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/design/themes/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/umaracing/adminpanel/index.php/modules/addons/themes/catalog?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Kumpulan Tema
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/design/mail_theme/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Tema email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/design/cms-pages/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Halaman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/design/modules/positions/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Posisi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminImages&amp;token=b3e53c0b20208c5e7bd2d145fff2a4bd\" class=\"link\"> Pengaturan Gambar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/umaracing/adminpanel/index.php/modules/link-widget/list?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminCarriers&amp;token=11b783492321ebb8c3692c21f213e86c\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Pengiriman
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminCarriers&amp;token=11b783492321ebb8c3692c21f213e86c\" class=\"link\"> Kurir
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/shipping/preferences?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/umaracing/adminpanel/index.php/improve/payment/payment_methods?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pembayaran
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/payment/payment_methods?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Cara Pembayaran
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/payment/preferences?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/umaracing/adminpanel/index.php/improve/international/localization/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internasional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/international/localization/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Pelokalan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminZones&amp;token=d23a64d094faec97ee5da1ef69c8e2ad\" class=\"link\"> Lokasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/international/taxes/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Pajak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/umaracing/adminpanel/index.php/improve/international/translations/settings?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Terjemahan
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                    <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminEmarketing&amp;token=1d81b79b8da10c77161606d4916f1c25\" class=\"link\">
                      <i class=\"material-icons mi-track_changes\">track_changes</i>
                      <span>
                      Advertising
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfigurasi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/umaracing/adminpanel/index.php/configure/shop/preferences/preferences?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parameter Toko
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/shop/preferences/preferences?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Umum
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/shop/order-preferences/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Pengaturan Order
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/shop/product-preferences/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/shop/customer-preferences/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Pengaturan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/shop/contacts/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Kontak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/shop/seo-urls/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminSearchConf&amp;token=27ad9d66e0101b68ef848d5e33e13be9\" class=\"link\"> Cari
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminGamification&amp;token=bd1b9a6d1e09ae3e58b5826e4883fa8f\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/umaracing/adminpanel/index.php/configure/advanced/system-information/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parameter lanjutan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/advanced/system-information/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Informasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/advanced/performance/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Kinerja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/advanced/administration/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Administrasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/advanced/emails/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/advanced/import/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Impor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/advanced/employees/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Karyawan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/advanced/sql-requests/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/advanced/logs/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Log
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/umaracing/adminpanel/index.php/configure/advanced/webservice-keys/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Luncurkan toko Anda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Lanjutkan</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Hentikan Pengenalan</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Katalog Modul</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Katalog Modul          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Unggah modul\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Unggah modul
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Terhubung ke Addons marketplace\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Terhubung ke Addons marketplace
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Bantuan\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/umaracing/adminpanel/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fid%252Fdoc%252FAdminModules%253Fversion%253D1.7.7.0%2526country%253Did/Bantuan?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\"
                   id=\"product_form_open_help\"
                >
                  Bantuan
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class=\"nav-item\">
                    <a href=\"/umaracing/adminpanel/index.php/modules/addons/modules/catalog?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" id=\"subtab-AdminPsMboModule\" class=\"nav-link tab active current\" data-submenu=\"134\">
                      Katalog Modul
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                              <li class=\"nav-item\">
                    <a href=\"/umaracing/adminpanel/index.php/modules/addons/modules/catalog/selection?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\" id=\"subtab-AdminPsMboAddons\" class=\"nav-link tab \" data-submenu=\"135\">
                      Module Selections
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modul dan layanan yang direkomendasikan',
        'Close': 'Tutup',
      },
      recommendedModulesUrl: '/umaracing/adminpanel/index.php/modules/addons/modules/recommended?tabClassName=AdminPsMboModule&_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Lanjutkan</button>
  <a class=\"onboarding-button-shut-down\">Lewati tutorial ini</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Selamat datang ke toko Anda!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Hai! Nama saya Preston dan saya hadir untuk mengantar Anda berkeliling.<\\/p>\\n    <p>Anda akan menemukan beberapa langkah penting sebelum bisa meluncurkan toko:\\n    Buat produk pertama, ubah suaikan toko, konfigurasikan pengiriman dan pembayaran...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Ayo kita mulai!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Nanti<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Mulai<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/umaracing\\/adminpanel\\/index.php?controller=AdminDashboard&token=6cce3d56c73348fb85797dcd36fb35ec\"}]},{\"title\":\"Ayo buat produk pertama Anda\",\"subtitle\":{\"1\":\"Apakah yang Anda ingin katakan tentangnya? Pikirkan hal-hal yang pelanggan Anda ingin ketahui.\",\"2\":\"Tambahkan informasi yang jelas dan menarik. Jangan cemas, Anda bisa mengeditnya nanti :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Beri produk Anda nama yang memikat.\",\"options\":[\"savepoint\"],\"page\":[\"\\/umaracing\\/adminpanel\\/index.php\\/sell\\/catalog\\/products\\/new?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Isilah rincian dasar di tab ini. Tab-tab lainnya disediakan untuk informasi yang lebih terinci.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Tambahkan satu gambar atau lebih sehingga produk terlihat memikat!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Seharga berapakah Anda ingin menjualnya?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Yei! Anda baru saja menciptakan produk pertama. Tampak bagus, kan?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Beri toko Anda jati dirinya sendiri\",\"subtitle\":{\"1\":\"Seperti apakah Anda ingin toko terlihat? Apakah yang membuatnya begitu istimewa?\",\"2\":\"Ubah suaikan tema atau pilih desain terbaik dari katalog tema kami.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara memulai yang baik adalah menambahkan logo Anda sendiri di sini!\",\"options\":[\"savepoint\"],\"page\":\"\\/umaracing\\/adminpanel\\/index.php\\/improve\\/design\\/themes\\/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Jika Anda ingin sesuatu yang benar-benar istimewa, tengoklah katalog tema!\",\"page\":\"\\/umaracing\\/adminpanel\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Menerima pembayaran di toko Anda\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk pelanggan membayar?\",\"2\":\"Sesuaikan tawaran Anda dengan pasar: Tambahkan cara pembayaran untuk pelanggan!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Cara-cara pembayaran ini sudah tersedia untuk pelanggan Anda.\",\"options\":[\"savepoint\"],\"page\":\"\\/umaracing\\/adminpanel\\/index.php\\/improve\\/payment\\/payment_methods?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dan Anda bisa memilih untuk menambahkan cara pembayaran lainnya dari sini!\",\"page\":\"\\/umaracing\\/adminpanel\\/index.php\\/improve\\/payment\\/payment_methods?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Pilih solusi pengiriman\",\"subtitle\":{\"1\":\"Bagaimanakah cara yang Anda inginkan untuk mengantar produk?\",\"2\":\"Pilih solusi pengiriman yang paling mungkin akan cocok dengan pelanggan! Buat kurir Anda sendiri atau tambahkan modul yang siap pakai.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Berikut adalah cara pengiriman yang tersedia di toko Anda hari ini.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/umaracing\\/adminpanel\\/index.php?controller=AdminCarriers&token=11b783492321ebb8c3692c21f213e86c\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Anda bisa menawarkan pilihan pengantaran yang lebih banyak dengan membentuk kurir tambahan\",\"page\":\"http:\\/\\/localhost\\/umaracing\\/adminpanel\\/index.php?controller=AdminCarriers&token=11b783492321ebb8c3692c21f213e86c\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Tingkatkan toko Anda dengan modul\",\"subtitle\":{\"1\":\"Tambahkan fitur baru dan kelola fitur yang ada berkat modul.\",\"2\":\"Beberapa modul sudah terinstal, modul yang lain mungkin gratis atau berbayar - jelajahi pilihan kami dan temukan apa saja yang tersedia!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Temukan pilihan modul kami di tab pertama. Kelola modul Anda di tab kedua dan periksa pemberitahuan di tab ketiga.\",\"options\":[\"savepoint\"],\"page\":\"\\/umaracing\\/adminpanel\\/index.php\\/improve\\/modules\\/catalog?_token=ESFH8R6-6k3gWxRUiXANXOi4a1yx0galBBKwU-IyqeE\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Kembali ke Anda!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Anda telah melihat hal-hal dasar, tetapi ada banyak hal lain yang bisa dijelajahi.<br \\/>\\n          Beberapa sumber daya yang bisa membantu Anda melangkah lebih jauh:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Panduan Pemulai<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Pelatihan<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial video<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Saya siap<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/umaracing/adminpanel/index.php?controller=AdminWelcome&token=20e3335464ab5842cd142580da4f065f\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hai! Anda tersesat?</p>    <p>Untuk melanjutkan, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Lanjutkan</button>    </div>    <p>Jika Anda ingin menghentikan tutorial sama sekali, klik di sini:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Keluar dari tutorial Sambutan</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Langkah <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Berikutnya</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1231
        $this->displayBlock('content_header', $context, $blocks);
        // line 1232
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1233
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1234
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1235
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"http://localhost/umaracing/adminpanel/index.php?controller=AdminDashboard&amp;token=6cce3d56c73348fb85797dcd36fb35ec\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Kembali
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/id/login?email=irsyadi.sayid879%40gmail.com&amp;firstname=Irsyadi&amp;lastname=Sayid&amp;website=http%3A%2F%2Flocalhost%2Fumaracing%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/umaracing/adminpanel/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Hubungkan toko Anda dengan pasar PrestaShop guna mengimpor secara otomatis semua pembelian Addons Anda.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Tidak memiliki akun ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Terhubung ke PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/id/forgot-your-password\">Lupa password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/id/login?email=irsyadi.sayid879%40gmail.com&amp;firstname=Irsyadi&amp;lastname=Sayid&amp;website=http%3A%2F%2Flocalhost%2Fumaracing%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBuat akun
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Login
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1342
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 104
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1231
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1232
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1233
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1234
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1342
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__8cb9724fcbb987086b83bbb078ec36628407d23dbb01b60ecf3a6d0c1ac5c86d";
    }

    public function getDebugInfo()
    {
        return array (  1432 => 1342,  1427 => 1234,  1422 => 1233,  1417 => 1232,  1412 => 1231,  1403 => 104,  1395 => 1342,  1286 => 1235,  1283 => 1234,  1280 => 1233,  1277 => 1232,  1275 => 1231,  144 => 104,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8cb9724fcbb987086b83bbb078ec36628407d23dbb01b60ecf3a6d0c1ac5c86d", "");
    }
}
