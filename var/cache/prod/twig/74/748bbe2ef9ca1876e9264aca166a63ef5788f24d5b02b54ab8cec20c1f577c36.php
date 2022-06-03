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

/* __string_template__e13e63b5e5ae07a377d2dfb5627ccfc769ae39a666000f31e5c9a933cf72c51b */
class __TwigTemplate_97109041af328eace3c220c6b929c7539ab166993c16f21a5f71b80997e4098b extends \Twig\Template
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
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/ecommerce/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/ecommerce/img/app_icon.png\" />

<title>Product • Asorock Market</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '1.7.8.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '5adbbea1ddfc990e7c491bb9d45141f5';
    var token_admin_orders = tokenAdminOrders = '428d5950ee3a5b23671338915132fa96';
    var token_admin_customers = '4032c840881c03975480d7e6ff15d86b';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '4524d294418d46fb46b7b77290bffaa6';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '59f457906fcc45c2ba949b5425bf6594';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/ecommerce/zhtoipgxluuzia3b/index.php/improve/modules/catalog/recommended?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk';
    var admin_notification_get_link = '/ecommerce/zhtoipgxluuzia3b/index.php/common/notifications?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk';
    var admin_notification_push_link = adminNotificationPushLink = '/ecommerce/zhtoipgxluuzia3b/index.php/common/notifications/ack?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/ecommerce/zhtoipgxluuzia3b/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/zhtoipgxluuzia3b/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ecommerce/modules/tvcmsslider/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/ecommerce\\/zhtoipgxluuzia3b\\/\";
var baseDir = \"\\/ecommerce\\/\";
var changeFormLanguageUrl = \"\\/ecommerce\\/zhtoipgxluuzia3b\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/ecommerce/zhtoipgxluuzia3b/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/zhtoipgxluuzia3b/themes/new-theme/public/multistore_dropdown.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/js/admin.js?v=1.7.8.5\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/zhtoipgxluuzia3b/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/js/tools.js?v=1.7.8.5\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/zhtoipgxluuzia3b/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/zhtoipgxluuzia3b/themes/default/js/bundle/module/module_card.js?v=1.7.8.5\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/js/jquery/ui/jquery.ui.widget.min.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/js/jquery/ui/jquery.ui.mouse.min.js\"></script>
<script type=\"text/javascript\" src=\"/ecommerce/js/jquery/ui/jquery.ui.sortable.min.js\"></script>

  

";
        // line 95
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminproducts multishop-enabled\"
  data-base-url=\"/ecommerce/zhtoipgxluuzia3b/index.php\"  data-token=\"eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminDashboard&amp;token=955161b88c803bfb20964a4aee0b0ef6\"></a>
      <span id=\"shop_version\">1.7.8.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=e6d7614ebbe4792ca2c51eec81077222\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php/improve/modules/manage?token=6db74ddd0a2bc9347b05048ba70d2f0f\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php/sell/catalog/categories/new?token=6db74ddd0a2bc9347b05048ba70d2f0f\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php/sell/catalog/products/new?token=6db74ddd0a2bc9347b05048ba70d2f0f\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=de29e803075f93aa596dbc024e876983\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminOrders&amp;token=428d5950ee3a5b23671338915132fa96\"
                 data-item=\"Orders\"
      >Orders</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminModules&amp;&amp;configure=tvcmsblog&amp;token=e2bb8b7af7662aa31b883092c2343770\"
                 data-item=\"ThemeVolty Settings\"
      >ThemeVolty Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"26\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/19\"
        data-post-link=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminQuickAccesses&token=24cf39cc993669733dfe36f4a9a90fae\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminQuickAccesses&token=24cf39cc993669733dfe36f4a9a90fae\">
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
      action=\"/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminSearch&amp;token=12183e00476c09fadcc91c9541b1fde9\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Customers<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=aac08fff3291c04e3658f4254d225103\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://www.canvrr.com/ecommerce/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Site</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/employees/1/edit?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Training</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminLogin&amp;logout=1&amp;token=4cf17e321091eb451ff309d4514ca737\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/employees/toggle-navigation?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminDashboard&amp;token=955161b88c803bfb20964a4aee0b0ef6\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/orders/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/orders/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/orders/invoices/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/orders/credit-slips/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/orders/delivery-slips/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminCarts&amp;token=aac08fff3291c04e3658f4254d225103\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/catalog/products?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/catalog/products?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/catalog/categories?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/catalog/monitoring/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminAttributesGroups&amp;token=8cf9aab5d87c63f2dbe2d8c1021de63f\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/catalog/brands/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/attachments/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminCartRules&amp;token=de29e803075f93aa596dbc024e876983\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/stocks/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/customers/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/customers/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/addresses/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminCustomerThreads&amp;token=4524d294418d46fb46b7b77290bffaa6\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminCustomerThreads&amp;token=4524d294418d46fb46b7b77290bffaa6\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/sell/customer-service/order-messages/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminReturn&amp;token=48f1e06393b273b8dad9c565129ac57a\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/modules/metrics/legacy/stats?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/modules/metrics/legacy/stats?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/modules/metrics?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/modules/manage?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/modules/manage?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/modules/addons/modules/catalog?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Module Catalog
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/design/themes/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/design/themes/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/modules/addons/themes/catalog?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/design/mail_theme/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/design/cms-pages/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/design/modules/positions/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminImages&amp;token=8b5d07bd531b5ea44881f81e0eb91508\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/modules/link-widget/list?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminCarriers&amp;token=e33442ec19398c9850e5fa06e4f4b715\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminCarriers&amp;token=e33442ec19398c9850e5fa06e4f4b715\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/shipping/preferences/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/payment/payment_methods?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/payment/payment_methods?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/payment/preferences?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/international/localization/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/international/localization/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/international/zones/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/international/taxes/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/improve/international/translations/settings?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
                    <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminPsfacebookModule&amp;token=4c5c866b74c336a6b294991d21f5e4ce\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminPsfacebookModule&amp;token=4c5c866b74c336a6b294991d21f5e4ce\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=457c6330361494672d145d344f8410d5\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"150\" id=\"subtab-Adminxprtdashboard\">
                    <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmspost&amp;token=acdc59215eae150499d063d857e3bc12\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      ThemeVolty Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-150\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-Admintvcmspost\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmspost&amp;token=acdc59215eae150499d063d857e3bc12\" class=\"link\"> Blog Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-Admintvcmscategory\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmscategory&amp;token=64ca96bf2ddf889091b869157c1c53d5\" class=\"link\"> Blog Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-Admintvcmscomment\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmscomment&amp;token=5a8e3dd4a81d1bbf5a83172ea7c79858\" class=\"link\"> Blog Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-Admintvcmsimagetype\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsimagetype&amp;token=4c05b660793ea629a2da8d0d1a0c59fc\" class=\"link\"> Blog Image Type
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/shop/preferences/preferences?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/shop/preferences/preferences?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/shop/order-preferences/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/shop/product-preferences/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/shop/customer-preferences/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/shop/contacts/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/shop/seo-urls/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminSearchConf&amp;token=8789c597d3298c1e2937dfaacec79173\" class=\"link\"> Search
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminGamification&amp;token=582f53f5603a5d863a9753fbea6c5d4e\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/system-information/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/system-information/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/performance/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/administration/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/emails/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/import/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/employees/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/sql-requests/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/logs/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/webservice-keys/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminShopGroup\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminShopGroup&amp;token=bfd652e16ec4638766c1d5e040cfac1c\" class=\"link\"> Multistore
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/ecommerce/zhtoipgxluuzia3b/index.php/configure/advanced/feature-flags/?_token=eRMPZnFX6s_vjie9n0hlVACXzmXL1uYKBUjGjBcCLEk\" class=\"link\"> Experimental Features
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"155\" id=\"tab-AdminThemeVolty\">
                <span class=\"title\">ThemeVolty Extension</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"156\" id=\"subtab-AdminThemeVoltyModules\">
                    <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsblogdisplayposts&amp;token=b23a5d8c2ea582a91ff62ce4515f529f\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      ThemeVolty Configure
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-156\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-Admintvcmsblogdisplayposts\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsblogdisplayposts&amp;token=b23a5d8c2ea582a91ff62ce4515f529f\" class=\"link\"> Blog on Home Page
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-Admintvcmsbrandlist\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsbrandlist&amp;token=80a31088016df9fcf262ed6e78ab55c1\" class=\"link\"> Brand List
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-Admintvcmscategorychainslider\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmscategorychainslider&amp;token=fc37d0abc2988b7bd86330535d8a364c\" class=\"link\"> Category Chain Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-Admintvcmscategoryproduct\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmscategoryproduct&amp;token=4e8d676ca2374fe6aede681c280d3c67\" class=\"link\"> Tab Category Product Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-Admintvcmscategoryslider\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmscategoryslider&amp;token=e7a5012bfd0358a3fe948bc11157fe99\" class=\"link\"> Category Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-Admintvcmscustomcssjs\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmscustomcssjs&amp;token=2c28eb4fd7e362c49fd5f93383062a74\" class=\"link\"> Custom Css And Js
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-Admintvcmscustomerservices\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmscustomerservices&amp;token=7c93d08857e91c3cc671efdeb53f8e63\" class=\"link\"> Customer Services
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"165\" id=\"subtab-Admintvcmsfootercategory\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsfootercategory&amp;token=54f2d0d5601ec9784586304e266a675b\" class=\"link\"> Footer Cateogry
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-Admintvcmsfooterlogo\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsfooterlogo&amp;token=ba412e20a8704e7c83e7f6c78e4370bf\" class=\"link\"> Footer Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-Admintvcmsfooterproduct\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsfooterproduct&amp;token=28a18b1a053d5863d93cade40d2ce6f7\" class=\"link\"> Footer Product
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-Admintvcmsinfinitescroll\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsinfinitescroll&amp;token=54a4a8ebb05a17d9aa3b9db8d286d1b3\" class=\"link\"> Infinite Scroll
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-Admintvcmsleftsideofferbanner\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsleftsideofferbanner&amp;token=f4529e6f459f0d905bec523063613fd4\" class=\"link\"> Left Side Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-Admintvcmsmegamenu\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsmegamenu&amp;token=5bfb4284c8a27ca04241fbe643c963a1\" class=\"link\"> Mega Menu
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-Admintvcmsmultibanner1\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsmultibanner1&amp;token=98fd26771a733fbc19e0d36ba2751da4\" class=\"link\"> MultiBanner 1
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-Admintvcmsnewsletterpopup\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsnewsletterpopup&amp;token=c9db7dbe928c8d836bf798536642cdf7\" class=\"link\"> Newsletter Popup
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-Admintvcmsofferbanner\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsofferbanner&amp;token=85dbaeb573603f85dc6cf769f5333b23\" class=\"link\"> Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-Admintvcmspaymenticon\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmspaymenticon&amp;token=6b2a44b608dd8a7f76cdb4a1c336518a\" class=\"link\"> Payment Icon
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"175\" id=\"subtab-Admintvcmsproductcomments\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsproductcomments&amp;token=b7789faf26f2dc6c2f26a5165a2ed051\" class=\"link\"> Product Comment
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-Admintvcmsproductpopup\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsproductpopup&amp;token=2e8732c6fe63a17414b3d3fb5cb00dba\" class=\"link\"> Product Popup
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"177\" id=\"subtab-Admintvcmssizechart\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmssizechart&amp;token=c418ed06550f57d2c48fc305cb68de1d\" class=\"link\"> Size Chart [Size/Chart/Table]
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"178\" id=\"subtab-Admintvcmsslider\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsslider&amp;token=7c818e2d67f5f768806c584b2635d70e\" class=\"link\"> Main Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-Admintvcmsstockinfo\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsstockinfo&amp;token=4a5a89f62861da4e06a062874e6321a0\" class=\"link\"> Stock Indicator
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"180\" id=\"subtab-Admintvcmstabproducts\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmstabproducts&amp;token=ad21be3908d7bfc24f8a51cb195a697f\" class=\"link\"> Tab Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-Admintvcmstestimonial\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmstestimonial&amp;token=70b05cd99a541a422101ce91c5fe63e5\" class=\"link\"> Testimonial
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-Admintvcmstwoofferbanner\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmstwoofferbanner&amp;token=b8947bf27472185d478e661df5773501\" class=\"link\"> Two Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-Admintvcmsvideotab\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmsvideotab&amp;token=adbf788d9b268e70d39d59d8e7e8c590\" class=\"link\"> Product Video
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-Admintvcmswishlist\">
                                <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmswishlist&amp;token=c989f6938c982b592cb99ceb5c04d302\" class=\"link\"> Customer&#039;s Wishlist
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"164\" id=\"subtab-Admintvcmscustomsetting\">
                    <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=Admintvcmscustomsetting&amp;token=8e7245578b89adb63b1d34d217474cab\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Custom Setting
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1397
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://www.canvrr.com/ecommerce/zhtoipgxluuzia3b/index.php?controller=AdminDashboard&amp;token=955161b88c803bfb20964a4aee0b0ef6\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=stephen.munabo%40gmail.com&amp;firstname=Site&amp;lastname=Owner&amp;website=http%3A%2F%2Fwww.canvrr.com%2Fecommerce%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/ecommerce/zhtoipgxluuzia3b/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=stephen.munabo%40gmail.com&amp;firstname=Site&amp;lastname=Owner&amp;website=http%3A%2F%2Fwww.canvrr.com%2Fecommerce%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
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
        // line 1505
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 95
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1397
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1505
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
        return "__string_template__e13e63b5e5ae07a377d2dfb5627ccfc769ae39a666000f31e5c9a933cf72c51b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1591 => 1505,  1574 => 1397,  1565 => 95,  1556 => 1505,  1442 => 1397,  135 => 95,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e13e63b5e5ae07a377d2dfb5627ccfc769ae39a666000f31e5c9a933cf72c51b", "");
    }
}
