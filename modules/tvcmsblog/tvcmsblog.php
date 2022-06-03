<?php
/**
* 2007-2022 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2022 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

include_once _PS_MODULE_DIR_.'tvcmsblog/config/define.inc.php';
include_once _PS_MODULE_DIR_.'tvcmsblog/classes/tvcmsblogresizeclass.php';
include_once _PS_MODULE_DIR_.'tvcmsblog/classes/tvcmsimagetypeclass.php';
include_once _PS_MODULE_DIR_.'tvcmsblog/classes/tvcmscategorypostclass.php';
include_once _PS_MODULE_DIR_.'tvcmsblog/classes/tvcmscommentclass.php';
include_once _PS_MODULE_DIR_.'tvcmsblog/classes/tvcmscategoryclass.php';
include_once _PS_MODULE_DIR_.'tvcmsblog/classes/tvcmspostsclass.php';
include_once _PS_MODULE_DIR_.'tvcmsblog/classes/tvcmspostmetaclass.php';
include_once _PS_MODULE_DIR_.'tvcmsblog/controllers/front/main.php';
include_once _PS_MODULE_DIR_.'tvcmsblog/data/fields_array.php';

class TvcmsBlog extends Module
{
    public static $tvcmsblogshortname = 'tvcmsblog';
    public static $quick_key = 'tvcmsblogquickaceslink';
    public static $tvcmslinkobj;
    public static $dispatcherobj;
    public static $inlinejs = array();
    public $all_hooks = array(
        "displayheader",
        "ModuleRoutes",
        "displaytvcmsblogleft",
        "displaytvcmsblogright",
        "displayBackOfficeTop",
        "displayAdminAfterHeader"
    );
     
    public $fields_arr_path;
    
    public $css_files = array(
        array(
            'key' => 'tvcmsblog_css',
            'src' => 'tvcmsblog.css',
            'priority' => 250,
            'media' => 'all',
            'load_theme' => false,
        ),
    );
    public $js_files = array(
        array(
            'key' => 'tvcmsblogJs',
            'src' => 'tvcmsblog.js',
            'priority' => 250,
            'position' => 'bottom',
            'load_theme' => false,
        ),
        array(
            'key' => 'tvcmsblog_validator_js',
            'src' => 'validator.min.js',
            'priority' => 250,
            'position' => 'bottom',
            'load_theme' => false,
        ),
    );
    public $all_tabs = array(
        array(
            'class_name' => 'Admintvcmspost',
            'id_parent' => 'parent',
            'name' => 'Blog Posts',
        ),
        array(
            'class_name' => 'Admintvcmscategory',
            'id_parent' => 'parent',
            'name' => 'Blog Categories',
        ),
        array(
            'class_name' => 'Admintvcmscomment',
            'id_parent' => 'parent',
            'name' => 'Blog Comments',
        ),
        array(
            'class_name' => 'Admintvcmsimagetype',
            'id_parent' => 'parent',
            'name' => 'Blog Image Type',
        ),
    );
    public $dbfiles = '/db/dbfiles.php';
    public static $ModuleName = 'tvcmsblog';
    
    public function __construct()
    {
        $MyFieldsForm = new MyFieldsForm();
        $this->fields_form = $MyFieldsForm->getAllForm($this);
        $this->name = 'tvcmsblog';
        $this->tab = 'front_office_features';
        $this->version = '4.0.0';
        $this->author = 'ThemeVolty';
        $this->bootstrap = true;
        $this->need_upgrade = true;
        $this->controllers = array('archive','single');
        parent::__construct();
        $this->displayName = $this->l('ThemeVolty - Blog');
        $this->description = $this->l('Manage Blog Module in Front Side');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->module_key = '';

        $this->confirmUninstall = $this->l('Warning: all the data saved in your database will be deleted.'.
            ' Are you sure you want uninstall this module?');
    }
    
    public function install()
    {
        if (!parent::install()
         || !$this->registerHooks()
         || !$this->registerTabs()
         || !$this->registerSQL()
         || !$this->addQuickAccessLink()
         // || !$this->createDefaultData()
         || !$this->installSampleData()
        ) {
            return false;
        }
        return true;
    }
    
    public function uninstall()
    {
        if (!parent::uninstall()
         || !$this->unregisterHooks()
         || !$this->unregisterTabs()
         || !$this->unregisterSQL()
         || !$this->uninstallSampleData()
         || !$this->deleteQuickAccessLink()
        ) {
            return false;
        }
        return true;
    }
    
    public function addQuickAccessLink()
    {
        $link = new Link();
        $QuickAccess = new QuickAccess();
        $QuickAccess->link = $link->getAdminLink('AdminModules').'&configure='.$this->name;
        $languages = Language::getLanguages(false);
        if (isset($languages) && !empty($languages)) {
            foreach ($languages as $language) {
                $QuickAccess->name[$language['id_lang']] = $this->l("ThemeVolty Settings");
            }
        }
        $QuickAccess->new_window = '0';
        if ($QuickAccess->save()) {
            Configuration::updateValue(self::$quick_key, $QuickAccess->id);
        }
        return true;
    }
    
    public function deleteQuickAccessLink()
    {
        $quick_key = (int)Configuration::get(self::$quick_key);
        if ($quick_key != 0) {
            $QuickAccess = new QuickAccess($quick_key);
            if ($QuickAccess->delete()) {
                return true;
            }
        } else {
            return false;
        }
    }
    
    public function tvcmsblogJs($params, $content, &$smarty)
    {
        if (isset($params['name']) && !empty($params['name']) && !empty($content)) {
            self::$inlinejs[$params['name']] = $content;
        }
    }
    
    public function registerHooks()
    {
        $this->registerHook("displayBeforeBodyClosingTag");
        if (isset($this->all_hooks)) {
            foreach ($this->all_hooks as $hook) {
                $this->registerHook($hook);
            }
        }
        return true;
    }
    
    public function hookdisplayBeforeBodyClosingTag($params)
    {
        if (isset(self::$inlinejs) && !empty(self::$inlinejs)) {
            foreach (self::$inlinejs as $keyinlinejs => $valueinlinejs) {
                print $valueinlinejs;
            }
        }
    }
    
    public function unregisterHooks()
    {
        $hook_idm = Module::getModuleIdByName("displayAdminAfterHeader");
        $this->unregisterHook((int)$hook_idm);

        $hook_idm = Module::getModuleIdByName("displayBackOfficeTop");
        $this->unregisterHook((int)$hook_idm);
        if (isset($this->all_hooks)) {
            foreach ($this->all_hooks as $hook) {
                $hook_id = Module::getModuleIdByName($hook);
                if (isset($hook_id) && !empty($hook_id)) {
                    $this->unregisterHook((int)$hook_id);
                }
            }
        }
        return true;
    }
    
    public function registerSQL()
    {
        $querys = array();
        if (file_exists(dirname(__FILE__).$this->dbfiles)) {
            require(dirname(__FILE__).$this->dbfiles);
            if (isset($querys) && !empty($querys)) {
                foreach ($querys as $query) {
                    if (!Db::getInstance()->Execute($query)) {
                        return false;
                    }
                }
            }
        }
        return true;
    }
    
    public function unregisterSQL()
    {
        $querys_u = array();
        if (file_exists(dirname(__FILE__).$this->dbfiles)) {
            require(dirname(__FILE__).$this->dbfiles);
            if (isset($querys_u) && !empty($querys_u)) {
                foreach ($querys_u as $query_u) {
                    if (!Db::getInstance()->Execute($query_u)) {
                        return false;
                    }
                }
            }
        }
        return true;
    }
    
    public function unregisterTabs()
    {
        $tabs_lists = array();
        if (isset($this->all_tabs) && !empty($this->all_tabs)) {
            foreach ($this->all_tabs as $tab_list) {
                $tab_list_id = Tab::getIdFromClassName($tab_list['class_name']);
                if (isset($tab_list_id) && !empty($tab_list_id)) {
                    $tabobj = new Tab($tab_list_id);
                    $tabobj->delete();
                }
            }
        }
        return true;
    }
    
    public function registerParentTabs()
    {
        $adminmodules_id = (int)Tab::getIdFromClassName("IMPROVE");
        return (int)$adminmodules_id;
    }
    
    public function hookModuleRoutes($params)
    {
        $mainslug = Configuration::get(self::$tvcmsblogshortname."main_blog_url");
        $postfixslug = Configuration::get(self::$tvcmsblogshortname."postfix_url_format");
        $categoryslug = Configuration::get(self::$tvcmsblogshortname."category_blog_url");
        $tagslug = Configuration::get(self::$tvcmsblogshortname."tag_blog_url");
        $singleslug = Configuration::get(self::$tvcmsblogshortname."single_blog_url");
        $main_slug = (isset($mainslug) && !empty($mainslug)) ? $mainslug : "tvcmsblog";
        $postfix_slug = (isset($postfixslug) && !empty($postfixslug) && ($postfixslug == "enable_html")) ? ".html" : "";
        $category_slug = (isset($categoryslug) && !empty($categoryslug)) ? $categoryslug : "category";
        $tag_slug = (isset($tagslug) && !empty($tagslug)) ? $tagslug : "tag";
        $single_slug = (isset($singleslug) && !empty($singleslug)) ? $singleslug : "post";
        $tvcmsblogroutes = array(
                'tvcmsblog-tvcmsblog-module' => array(
                    'controller' =>  'archive',
                    'rule' =>        $main_slug.$postfix_slug,
                    'keywords' => array(),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'subpage_type' => 'post',
                        'page_type' => 'category',
                    )
                ),
                'tvcmsblog-archive-module' => array(
                    'controller' =>  'archive',
                    'rule' =>        $main_slug.'/'.$category_slug.'/{id}_{rewrite}'.$postfix_slug,
                    'keywords' => array(
                        'id'   =>   array('regexp' => '[0-9]+', 'param' => 'id'),
                        'rewrite'       =>   array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'rewrite'),
                    ),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'subpage_type' => 'post',
                        'page_type' => 'category',
                    )
                ),
                'tvcmsblog-archive-aftrid-module' => array(
                    'controller' =>  'archive',
                    'rule' =>        $main_slug.'/'.$category_slug.'/{rewrite}_{id}'.$postfix_slug,
                    'keywords' => array(
                        'id'   =>   array('regexp' => '[0-9]+', 'param' => 'id'),
                        'rewrite'       =>   array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'rewrite'),
                    ),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'subpage_type' => 'post',
                        'page_type' => 'category',
                    )
                ),
                'tvcmsblog-archive-wid-module' => array(
                    'controller' =>  'archive',
                    'rule' =>        $main_slug.'/'.$category_slug.'/{rewrite}'.$postfix_slug,
                    'keywords' => array(
                        'id'   =>   array('regexp' => '[0-9]+', 'param' => 'id'),
                        'rewrite'       =>   array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'rewrite'),
                    ),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'subpage_type' => 'post',
                        'page_type' => 'category',
                    )
                ),
                'tvcmsblog-tag-module' => array(
                    'controller' =>  'archive',
                    'rule' =>        $main_slug.'/'.$tag_slug.'/{id}_{rewrite}'.$postfix_slug,
                    'keywords' => array(
                        'id'   =>   array('regexp' => '[0-9]+', 'param' => 'id'),
                        'rewrite'       =>   array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'rewrite'),
                    ),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'subpage_type' => 'post',
                        'page_type' => 'tag',
                    )
                ),
                'tvcmsblog-tag-aftrid-module' => array(
                    'controller' =>  'archive',
                    'rule' =>        $main_slug.'/'.$tag_slug.'/{rewrite}_{id}'.$postfix_slug,
                    'keywords' => array(
                        'id'   =>   array('regexp' => '[0-9]+', 'param' => 'id'),
                        'rewrite'       =>   array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'rewrite'),
                    ),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'subpage_type' => 'post',
                        'page_type' => 'tag',
                    )
                ),
                'tvcmsblog-tag-wid-module' => array(
                    'controller' =>  'archive',
                    'rule' =>        $main_slug.'/'.$tag_slug.'/{rewrite}'.$postfix_slug,
                    'keywords' => array(
                        'id'   =>   array('regexp' => '[0-9]+', 'param' => 'id'),
                        'rewrite'       =>   array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'rewrite'),
                    ),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'subpage_type' => 'post',
                        'page_type' => 'tag',
                    )
                ),
                'tvcmsblog-single-module' => array(
                    'controller' =>  'single',
                    'rule' =>        $main_slug.'/'.$single_slug.'/{id}_{rewrite}'.$postfix_slug,
                    'keywords' => array(
                        'id' =>   array('regexp' => '[0-9]+','param' => 'id'),
                        'rewrite' =>   array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'rewrite'),
                    ),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'page_type' => 'post',
                    )
                ),
                'tvcmsblog-single-aftrid-module' => array(
                    'controller' =>  'single',
                    'rule' =>        $main_slug.'/'.$single_slug.'/{rewrite}_{id}'.$postfix_slug,
                    'keywords' => array(
                        'id' =>   array('regexp' => '[0-9]+','param' => 'id'),
                        'rewrite' =>   array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'rewrite'),
                    ),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'page_type' => 'post',
                    )
                ),
                'tvcmsblog-single-wid-module' => array(
                    'controller' =>  'single',
                    'rule' =>        $main_slug.'/'.$single_slug.'/{rewrite}'.$postfix_slug,
                    'keywords' => array(
                        'id' =>   array('regexp' => '[0-9]+','param' => 'id'),
                        'rewrite' =>   array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'rewrite'),
                    ),
                    'params' => array(
                        'fc' => 'module',
                        'module' => 'tvcmsblog',
                        'page_type' => 'post',
                    )
                ),
            );
        return $tvcmsblogroutes;
    }
    
    public static function getLinkObject()
    {
        if (!isset(self::$tvcmslinkobj) || empty(self::$tvcmslinkobj)) {
            $ssl = false;
            if (Configuration::get('PS_SSL_ENABLED')
                && Configuration::get('PS_SSL_ENABLED_EVERYWHERE')
            ) {
                $ssl = true;
            }
            $protocol_link=(Configuration::get('PS_SSL_ENABLED') || Tools::usingSecureMode()) ? 'https://' : 'http://';
            $tmp = Configuration::get('PS_SSL_ENABLED');
            $useSSL = ((isset($ssl) && $ssl && $tmp) || Tools::usingSecureMode()) ? true : false;
            $protocol_content = ($useSSL) ? 'https://' : 'http://';
            self::$tvcmslinkobj = new Link($protocol_link, $protocol_content);
        }
        return self::$tvcmslinkobj;
    }
    
    public static function getBaseLink($id_shop = null, $ssl = null, $relative_protocol = false)
    {
        static $force_ssl = null;

        if ($ssl === null) {
            if ($force_ssl === null) {
                $force_ssl = (Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE'));
            }
            $ssl = $force_ssl;
        }

        if (Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE') && $id_shop !== null) {
            $shop = new Shop($id_shop);
        } else {
            $shop = Context::getContext()->shop;
        }

        if ($relative_protocol) {
            $base = '//'.($ssl ? $shop->domain_ssl : $shop->domain);
        } else {
            $base = (($ssl) ? 'https://'.$shop->domain_ssl : 'http://'.$shop->domain);
        }

        return $base.$shop->getBaseURI();
    }
    
    public static function getLangLink($id_lang = null, Context $context = null, $id_shop = null)
    {
        if (!$context) {
            $context = Context::getContext();
        }
        if (!$id_shop) {
            $id_shop = $context->shop->id;
        }
        $allow = (int)Configuration::get('PS_REWRITING_SETTINGS');
        if ((!$allow && in_array($id_shop, array($context->shop->id,  null)))
                || !Language::isMultiLanguageActivated($id_shop)
                || !(int)Configuration::get('PS_REWRITING_SETTINGS', null, null, $id_shop)
            ) {
            return '';
        }
        if (!$id_lang) {
            $id_lang = $context->language->id;
        }
        return Language::getIsoById($id_lang).'/';
    }
    
    public static function tvcmsBlogMainLink()
    {
        $id_shop = (int)Context::getcontext()->shop->id;
        $id_lang = (int)Context::getcontext()->language->id;
        $ssl = null;
        $relative_protocol = false;
        $url = self::getBaseLink($id_shop, $ssl, $relative_protocol).self::getLangLink($id_lang, null, $id_shop);
        return $url;
    }
    
    public static function tvcmsBlogLink($rule = 'tvcmsblog-tvcmsblog-module', $params = array())
    {
        $context = Context::getContext();
        $id_lang = (int)$context->language->id;
        $id_shop = (int)$context->shop->id;
        $mainurl = self::tvcmsBlogMainLink();
        if (!isset(self::$dispatcherobj) || empty(self::$dispatcherobj)) {
            self::$dispatcherobj = Dispatcher::getInstance();
        }
        $force_routes = (bool)Configuration::get('PS_REWRITING_SETTINGS');
        return $mainurl.self::$dispatcherobj->createUrl($rule, $id_lang, $params, $force_routes);
    }
    
    public static function tvcmsBlogPostLink($params = array())
    {
        $url_format = Configuration::get(self::$tvcmsblogshortname."url_format");
        if (isset($params['id']) && !isset($params['rewrite'])) {
            $params['rewrite'] = TvcmsPostsClass::getTtheRewrite($params['id']);
        }
        if (!isset($params['id']) && isset($params['rewrite'])) {
            $params['id'] = TvcmsPostsClass::getTheId($params['rewrite']);
        }
        if (!isset($params['page_type'])) {
            $params['page_type'] = 'post';
        }
        if ($url_format == 'preid_seo_url') {
            $rule = 'tvcmsblog-single-module';
            return self::tvcmsBlogLink($rule, $params);
        } elseif ($url_format == 'postid_seo_url') {
            $rule = 'tvcmsblog-single-aftrid-module';
            return self::tvcmsBlogLink($rule, $params);
        } elseif ($url_format == 'wthotid_seo_url') {
            $rule = 'tvcmsblog-single-wid-module';
            return self::tvcmsBlogLink($rule, $params);
        } elseif ($url_format == 'default_seo_url') {
            return self::getLinkObject()->getModuleLink("tvcmsblog", "single", $params);
        } else {
            $rule = 'tvcmsblog-single-module';
        }
    }
    
    public static function tvcmsBlogTagLink($params = array())
    {
        $url_format = Configuration::get(self::$tvcmsblogshortname."url_format");
        // if(isset($params['id']) && !isset($params['rewrite'])){
        //  $params['rewrite'] = tvcmspostsclass::getTtheRewrite($params['id']);
        // }
        if (!isset($params['page_type'])) {
            $params['page_type'] = 'tag';
        }
        if (!isset($params['subpage_type'])) {
            $params['subpage_type'] = 'post';
        }
        if ($url_format == 'preid_seo_url') {
            $rule = 'tvcmsblog-tag-module';
            return self::tvcmsBlogLink($rule, $params);
        } elseif ($url_format == 'postid_seo_url') {
            $rule = 'tvcmsblog-tag-aftrid-module';
            return self::tvcmsBlogLink($rule, $params);
        } elseif ($url_format == 'wthotid_seo_url') {
            $rule = 'tvcmsblog-tag-wid-module';
            return self::tvcmsBlogLink($rule, $params);
        } elseif ($url_format == 'default_seo_url') {
            return self::getLinkObject()->getModuleLink("tvcmsblog", "archive", $params);
        } else {
            $rule = 'tvcmsblog-tag-module';
            return self::tvcmsBlogLink($rule, $params);
        }
    }
    
    public static function tvcmsBlogCategoryLink($params = array())
    {
        $url_format = Configuration::get(self::$tvcmsblogshortname."url_format");
        // if(isset($params['id']) && !isset($params['rewrite'])){
        //  $params['rewrite'] = TvcmsPostsClass::getTtheRewrite($params['id']);
        // }
        if (!isset($params['page_type'])) {
            $params['page_type'] = 'category';
        }
        if (!isset($params['subpage_type'])) {
            $params['subpage_type'] = 'post';
        }
        if ($url_format == 'preid_seo_url') {
            $rule = 'tvcmsblog-archive-module';
            return self::tvcmsBlogLink($rule, $params);
        } elseif ($url_format == 'postid_seo_url') {
            $rule = 'tvcmsblog-archive-aftrid-module';
            return self::tvcmsBlogLink($rule, $params);
        } elseif ($url_format == 'wthotid_seo_url') {
            $rule = 'tvcmsblog-archive-wid-module';
            return self::tvcmsBlogLink($rule, $params);
        } elseif ($url_format == 'default_seo_url') {
            return self::getLinkObject()->getModuleLink("tvcmsblog", "archive", $params);
        } else {
            $rule = 'tvcmsblog-archive-module';
            return self::tvcmsBlogLink($rule, $params);
        }
    }
    /* tvcmsblog::getThemeName()  */
    
    public static function getThemeName()
    {
        $theme_name = Configuration::get(self::$tvcmsblogshortname."theme_name");
        if (isset($theme_name) && !empty($theme_name)) {
            return $theme_name;
        } else {
            return "default";
        }
    }
    
    public function registerETabs()
    {
        $tabpar_listobj = new Tab();
        $langs = Language::getLanguages();
        $id_parent = (int)$this->registerParentTabs();
        $tabpar_listobj->class_name = 'Adminxprtdashboard';
        $tabpar_listobj->id_parent = $id_parent;
        $tabpar_listobj->module = $this->name;
        foreach ($langs as $l) {
            $tabpar_listobj->name[$l['id_lang']] = $this->l("ThemeVolty Blog");
        }
        if ($tabpar_listobj->save()) {
            return (int)$tabpar_listobj->id;
        } else {
            return (int)$id_parent;
        }
    }
    
    public function registerTabs()
    {
        $tabs_lists = array();
        $langs = Language::getLanguages();
        $id_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $save_tab_id = $this->registerETabs();
        if (isset($this->all_tabs) && !empty($this->all_tabs)) {
            foreach ($this->all_tabs as $tab_list) {
                $tab_listobj = new Tab();
                $tab_listobj->class_name = $tab_list['class_name'];
                if ($tab_list['id_parent'] == 'parent') {
                    $tab_listobj->id_parent = $save_tab_id;
                } else {
                    $tab_listobj->id_parent = $tab_list['id_parent'];
                }
                if (isset($tab_list['module']) && !empty($tab_list['module'])) {
                    $tab_listobj->module = $tab_list['module'];
                } else {
                    $tab_listobj->module = $this->name;
                }
                foreach ($langs as $l) {
                    $tab_listobj->name[$l['id_lang']] = $this->l($tab_list['name']);
                }
                $tab_listobj->save();
            }
        }
        return true;
    }
    // Start Setting
    
    public function installSampleData()
    {
        $multiple_arr = array();
        $this->allFields();
        foreach ($this->fields_form as $value) {
            if (empty($multiple_arr)) {
                $multiple_arr = $value['form']['input'];
            } else {
                $multiple_arr = array_merge($multiple_arr, $value['form']['input']);
            }
        }
        // START LANG
        $languages = Language::getLanguages(false);
        if (isset($multiple_arr) && !empty($multiple_arr)) {
            foreach ($multiple_arr as $mvalue) {
                if (isset($mvalue['lang']) && $mvalue['lang'] == true && isset($mvalue['name'])) {
                    foreach ($languages as $lang) {
                        if (isset($mvalue['default_val'])) {
                            ${$mvalue['name'].'_lang'}[$lang['id_lang']] = $mvalue['default_val'];
                        }
                    }
                }
            }
        }
        // END LANG
        if (isset($multiple_arr) && !empty($multiple_arr)) {
            foreach ($multiple_arr as $mvalue) {
                if (isset($mvalue['lang']) && $mvalue['lang'] == true && isset($mvalue['name'])) {
                    Configuration::updateValue(self::$tvcmsblogshortname.$mvalue['name'], ${$mvalue['name'].'_lang'});
                } else {
                    if (isset($mvalue['name'])) {
                        if (isset($mvalue['default_val'])) {
                            Configuration::updateValue(self::$tvcmsblogshortname
                                .$mvalue['name'], $mvalue['default_val']);
                        }
                    }
                }
            }
        }
        return true;
    }
    
    public function uninstallSampleData()
    {
        $multiple_arr = array();
        $this->allFields();
        foreach ($this->fields_form as $value) {
            if (empty($multiple_arr)) {
                $multiple_arr = $value['form']['input'];
            } else {
                $multiple_arr = array_merge($multiple_arr, $value['form']['input']);
            }
        }
        if (isset($multiple_arr) && !empty($multiple_arr)) {
            foreach ($multiple_arr as $mvalue) {
                if (isset($mvalue['name'])) {
                    Configuration::deleteByName(self::$tvcmsblogshortname.$mvalue['name']);
                }
            }
        }
        return true;
    }
    
    public function allFields()
    {
        $tvcmsblog_settings = array();
        include_once(dirname(__FILE__).$this->fields_arr_path);
        if ($this->getConfigPath()) {
            include_once($this->getConfigPath());
        }
        if (isset($tvcmsblog_settings) && !empty($tvcmsblog_settings)) {
            foreach ($tvcmsblog_settings as $tvcmsblog_setting) {
                $this->fields_form[]['form'] = $tvcmsblog_setting;
            }
        }
        return $this->fields_form;
    }
    
    public function asignGlobalSettingValue()
    {
        $tvcmsblogsettings = $this->getSettingsValueS();
        $this->smarty->assignGlobal('tvcmsblogsettings', $tvcmsblogsettings);
        return true;
    }
    
    public static function getAllThemes()
    {
        $results = array();
        $theme_dirs = _PS_THEME_DIR_.'modules/'.TVCMSBLOG_TPL_DIR;
        $module_dirs = _PS_MODULE_DIR_.TVCMSBLOG_TPL_DIR;

        if (is_dir($theme_dirs)) {
            $scandir = scandir($theme_dirs);
            $all_folders = array_diff($scandir, array('..', '.', 'index.php'));
        } elseif (is_dir($module_dirs)) {
            $scandir = scandir($module_dirs);
            $all_folders = array_diff($scandir, array('..', '.', 'index.php'));
        }
        if (isset($all_folders) && !empty($all_folders)) {
            $i = 0;
            foreach ($all_folders as $folder) {
                $results[$i]['id'] = $folder;
                $results[$i]['name'] = ucwords($folder);
                $i++;
            }
        }
        return $results;
    }
    
    public function getSettingsValueS()
    {
        $id_lang = Context::getcontext()->language->id;
        $multiple_arr = array();
        $tvcmsblogsettings = array();
        $this->allFields();
        foreach ($this->fields_form as $value) {
            $multiple_arr = array_merge($multiple_arr, $value['form']['input']);
        }
        if (isset($multiple_arr) && !empty($multiple_arr)) {
            foreach ($multiple_arr as $mvalue) {
                if (isset($mvalue['lang']) && $mvalue['lang'] == true && isset($mvalue['name'])) {
                    $tvcmsblogsettings[$mvalue['name']] = Configuration::get(self::$tvcmsblogshortname
                        .$mvalue['name'], $id_lang);
                } else {
                    if (isset($mvalue['name'])) {
                        $tvcmsblogsettings[$mvalue['name']] = Configuration::get(self::$tvcmsblogshortname
                            .$mvalue['name']);
                    }
                }
            }
        }
        return $tvcmsblogsettings;
    }
    
    public function hookdisplaytvcmsblogleft()
    {
        // return 'i am left';
    }
    
    public function hookdisplaytvcmsblogright()
    {
        // return 'i am right';
    }
    
    public function registerCss()
    {
        if (isset($this->css_files) && !empty($this->css_files)) {
            $theme_name = $this->context->shop->theme_name;
            foreach ($this->css_files as $css_file) {
                if (isset($css_file['key'])
                        && !empty($css_file['key'])
                        && isset($css_file['src'])
                        && !empty($css_file['src'])
                    ) {
                    $media = (isset($css_file['media']) && !empty($css_file['media'])) ? $css_file['media'] : 'all';
                    $tmp = $css_file['priority'];
                    $priority = (isset($css_file['priority']) && !empty($tmp)) ? $css_file['priority'] : 50;
                    if (isset($css_file['load_theme']) && ($css_file['load_theme'] == true)) {
                        $this->context->controller->registerStylesheet($css_file['key'], 'themes/'.$theme_name
                            .'/assets/css/'.$css_file['src'], array('media' => $media, 'priority' => $priority));
                    } else {
                        $this->context->controller->registerStylesheet($css_file['key'], 'modules/'.$this->name
                            .'/views/css/'.$css_file['src'], array('media' => $media, 'priority' => $priority));
                    }
                }
            }
        }
        return true;
    }
    
    public function registerJs()
    {
        if (isset($this->js_files) && !empty($this->js_files)) {
            foreach ($this->js_files as $js_file) {
                if (isset($js_file['key'])
                        && !empty($js_file['key'])
                        && isset($js_file['src'])
                        && !empty($js_file['src'])
                    ) {
                    $tmp = $js_file['position'];
                    $position = (isset($js_file['position']) && !empty($tmp)) ? $js_file['position'] : 'bottom';
                    $tmp = $js_file['priority'];
                    $priority = (isset($js_file['priority']) && !empty($tmp)) ? $js_file['priority'] : 50;
                    if (isset($js_file['load_theme']) && ($js_file['load_theme'] == true)) {
                        $this->context->controller->registerJavascript($js_file['key'], _THEME_DIR_
                            .'assets/js/'.$js_file['src'], array('position' => $position, 'priority' => $priority));
                    } else {
                        $this->context->controller->registerJavascript($js_file['key'], 'modules/'.$this->name
                            .'/views/js/'.$js_file['src'], array('position' => $position, 'priority' => $priority));
                    }
                }
            }
        }
        return true;
    }
    
    public function hookdisplayheader()
    {
        $this->context->controller->addCSS($this->_path.'views/css/front.css');
        $base_url = $this->context->shop->getBaseURL(true, true);
        Media::addJsDef(array('tvcms_base_dir' => $base_url));
        if ($this->context->controller->controller_type == 'front'
            || $this->context->controller->controller_type == 'modulefront'
        ) {
            // global $smarty;
            smartyRegisterFunction($this->context->smarty, 'block', 'tvcmsblogJs', array('tvcmsblog', 'tvcmsblogJs'));
        }
        $this->registerCss();
        $this->registerJs();
    }
    
    public function generateImageThumbnail($select_image_type = 'all')
    {
        $dir = _PS_MODULE_DIR_.self::$ModuleName.'/views/img/';
        $getAllImageTypes = TvcmsImageTypeClass::getAllImageTypes();
        if ($select_image_type == 'all' || $select_image_type == 'category') {
            // start category
            $categories = TvcmsCategoryClass::getCategories();
            if (isset($categories) && !empty($categories)) {
                foreach ($categories as $category) {
                    if (isset($category['category_img'])
                            && !empty($category['category_img'])
                            && file_exists($dir.$category['category_img'])
                        ) {
                        $ext = Tools::substr($category['category_img'], strrpos($category['category_img'], '.') + 1);
                        if (isset($getAllImageTypes) && !empty($getAllImageTypes)) {
                            foreach ($getAllImageTypes as $imagetype) {
                                // ImageManager::resize(
                                //     $dir.$category['category_img'],
                                //     $dir.$imagetype['name'].'-'.$category['category_img'],
                                //     (int)$imagetype['width'],
                                //     (int)$imagetype['height'],
                                //     $ext
                                // );
                                $w = (int)$imagetype['width'];
                                $h = (int)$imagetype['height'];
                                $resizeObj = new TvcmsBlogResizeClass($dir.$category['category_img']);
                                $resizeObj->resizeImage($w, $h, 3);
                                $resizeObj->saveImage($dir.$imagetype['name'].'-'.$category['category_img']);
                            }
                        }
                    }
                }
            }
            // End category
        }
        if ($select_image_type == 'all' || $select_image_type == 'gallery' || $select_image_type == 'post') {
            $posts_count = TvcmsPostsClass::getCategoryPostsCount();
            $all_posts = TvcmsPostsClass::getCategoryPosts(null, 1, $posts_count, 'post', 'DESC');
        }
        if ($select_image_type == 'all' || $select_image_type == 'post') {
            // Start Post Image
            if (isset($all_posts) && !empty($all_posts)) {
                foreach ($all_posts as $all_post) {
                    if (isset($all_post['post_img'])
                            && !empty($all_post['post_img'])
                            && file_exists($dir.$all_post['post_img'])
                        ) {
                        $ext = Tools::substr($all_post['post_img'], strrpos($all_post['post_img'], '.') + 1);
                        if (isset($getAllImageTypes) && !empty($getAllImageTypes)) {
                            foreach ($getAllImageTypes as $imagetype) {
                                // ImageManager::resize(
                                //     $dir.$all_post['post_img'],
                                //     $dir.$imagetype['name'].'-'.$all_post['post_img'],
                                //     (int)$imagetype['width'],
                                //     (int)$imagetype['height'],
                                //     $ext
                                // );
                                $w = (int)$imagetype['width'];
                                $h = (int)$imagetype['height'];
                                $resizeObj = new TvcmsBlogResizeClass($dir.$all_post['post_img']);
                                $resizeObj->resizeImage($w, $h, 3);
                                $resizeObj->saveImage($dir.$imagetype['name'].'-'.$all_post['post_img']);
                            }
                        }
                    }
                }
            }
            // End Post Image
        }

        if ($select_image_type == 'all' || $select_image_type == 'gallery') {
            if (isset($all_posts) && !empty($all_posts)) {
                foreach ($all_posts as $all_post) {
                    if (isset($all_post['gallery']) && !empty($all_post['gallery'])) {
                        $gallery = @explode(",", $all_post['gallery']);
                        if (isset($gallery) && !empty($gallery) && is_array($gallery)) {
                            foreach ($gallery as $gall) {
                                if (file_exists($dir.$gall)) {
                                    $ext = Tools::substr($gall, strrpos($gall, '.') + 1);
                                    if (isset($getAllImageTypes) && !empty($getAllImageTypes)) {
                                        foreach ($getAllImageTypes as $imagetype) {
                                            // ImageManager::resize(
                                            //     $dir.$gall,
                                            //     $dir.$imagetype['name'].'-'.$gall,
                                            //     (int)$imagetype['width'],
                                            //     (int)$imagetype['height'],
                                            //     $ext
                                            // );
                                            $w = (int)$imagetype['width'];
                                            $h = (int)$imagetype['height'];
                                            $resizeObj = new TvcmsBlogResizeClass($dir.$gall);
                                            $resizeObj->resizeImage($w, $h, 3);
                                            $resizeObj->saveImage($dir.$imagetype['name'].'-'.$gall);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    
    public function getContent()
    {
        $useSSL = (isset($this->ssl) && $this->ssl && Configuration::get('PS_SSL_ENABLED')) || Tools::usingSecureMode() ? true : false;
        $protocol_content = $useSSL ? 'https://' : 'http://';
        $baseDir = $protocol_content . Tools::getHttpHost() . __PS_BASE_URI__;
        $link = PS_ADMIN_DIR;
        if (Tools::substr(strrchr($link, "/"), 1)) {
            $admin_folder = Tools::substr(strrchr($link, "/"), 1);
        } else {
            $admin_folder = Tools::substr(strrchr($link, "\'"), 1);
        }
        $static_token = Tools::getAdminToken('AdminModules' . (int) Tab::getIdFromClassName('AdminModules') . (int) $this->context->employee->id);
        $url_slidersampleupgrade = $baseDir . $admin_folder . '/index.php?controller=AdminModules&configure='.$this->name.'&tab_module=front_office_features&module_name='.$this->name.'&token=' . $static_token;
        $this->context->smarty->assign('tvurlupgrade', $url_slidersampleupgrade);

        if (Tools::isSubmit('submitTvcmsSampleinstall')) {
            $this->createDefaultData();
        }
        if (Tools::isSubmit('submit_generateimage')) {
            $select_image_type = Tools::getValue('select_image_type');
            $this->generateImageThumbnail($select_image_type);
        }
        $this->context->controller->addJqueryPlugin('tagify');
        Configuration::updateValue('tvcmsblogshortname', self::$tvcmsblogshortname);
        $html = '';
        $multiple_arr = array();
        // START RENDER FIELDS
        $this->allFields();
        // END RENDER FIELDS
        if (Tools::isSubmit('save'.$this->name)) {
            foreach ($this->fields_form as $value) {
                $multiple_arr = array_merge($multiple_arr, $value['form']['input']);
            }
            // START LANG
            $languages = Language::getLanguages(false);
            if (isset($multiple_arr) && !empty($multiple_arr)) {
                foreach ($multiple_arr as $mvalue) {
                    if (isset($mvalue['lang']) && $mvalue['lang'] == true && isset($mvalue['name'])) {
                        foreach ($languages as $lang) {
                            ${$mvalue['name'].'_lang'}[$lang['id_lang']] = Tools::getvalue($mvalue['name']
                                .'_'.$lang['id_lang']);
                        }
                    }
                }
            }
            // END LANG
            if (isset($multiple_arr) && !empty($multiple_arr)) {
                foreach ($multiple_arr as $mvalue) {
                    if (isset($mvalue['lang']) && $mvalue['lang'] == true && isset($mvalue['name'])) {
                            Configuration::updateValue(self::$tvcmsblogshortname
                                .$mvalue['name'], ${$mvalue['name'].'_lang'});
                    } else {
                        if (isset($mvalue['name'])) {
                            Configuration::updateValue(self::$tvcmsblogshortname
                                .$mvalue['name'], Tools::getvalue($mvalue['name']));
                        }
                    }
                }
            }
            $helper = $this->settingForm();
            $html_form = $helper->generateForm($this->fields_form);
            $html .= $this->displayConfirmation($this->l('Successfully Saved All Fields Values.'));
            $html .= $html_form;
        } else {
            $helper = $this->settingForm();
            $html_form = $helper->generateForm($this->fields_form);
            $html .= $html_form;
        }
        return $html;
    }
    
    public function settingForm()
    {
        $languages = Language::getLanguages(false);
        $default_lang = (int) Configuration::get('PS_LANG_DEFAULT');
        $this->allFields();
        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        foreach ($languages as $lang) {
            $helper->languages[] = array(
                    'id_lang' => $lang['id_lang'],
                    'iso_code' => $lang['iso_code'],
                    'name' => $lang['name'],
                    'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }
        $helper->toolbar_btn = array(
            'save' =>
            array(
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&save'.$this->name
                    .'token=' . Tools::getAdminTokenLite('AdminModules'),
            )
        );
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'save'.$this->name;
        $multiple_arr = array();

        foreach ($this->fields_form as $value) {
            if (empty($multiple_arr)) {
                if (isset($value['form']['input']) && !empty($value['form']['input'])) {
                    $multiple_arr = $value['form']['input'];
                }
            } else {
                if (isset($value['form']['input']) && !empty($value['form']['input'])) {
                    $multiple_arr = array_merge($multiple_arr, $value['form']['input']);
                }
            }
        }
        foreach ($multiple_arr as $mvalue) {
            if (isset($mvalue['lang']) && $mvalue['lang'] == true && isset($mvalue['name'])) {
                foreach ($languages as $lang) {
                    $tmp = Configuration::get(self::$tvcmsblogshortname.$mvalue['name'], $lang['id_lang']);
                    $helper->fields_value[$mvalue['name']][$lang['id_lang']] = $tmp;
                }
            } else {
                if (isset($mvalue['name'])) {
                    $helper->fields_value[$mvalue['name']] = Configuration::get(self::$tvcmsblogshortname
                        .$mvalue['name']);
                }
            }
        }
        return $helper;
    }
    
    public function getConfigPath()
    {
        $template = 'settings.php';
        $themename = self::getThemeName();
        if (Tools::file_exists_cache(_PS_THEME_DIR_.'modules/'.TvcmsBlog::$ModuleName
            .'/views/templates/front/'.$themename.'/'.$template)) {
            return _PS_THEME_DIR_.'modules/'.TvcmsBlog::$ModuleName.'/views/templates/front/'
                .$themename.'/'.$template;
        } elseif (Tools::file_exists_cache(_PS_THEME_DIR_.'modules/'.TvcmsBlog::$ModuleName
            .'/views/templates/front/'.$template)) {
            return _PS_THEME_DIR_.'modules/'.TvcmsBlog::$ModuleName.'/views/templates/front/'.$template;
        } elseif (Tools::file_exists_cache(_PS_MODULE_DIR_.TvcmsBlog::$ModuleName
            .'/views/templates/front/'.$themename.'/'.$template)) {
            return _PS_MODULE_DIR_.TvcmsBlog::$ModuleName.'/views/templates/front/'.$themename.'/'.$template;
        } elseif (Tools::file_exists_cache(_PS_MODULE_DIR_.TvcmsBlog::$ModuleName
            .'/views/templates/front/'.$template)) {
            return _PS_MODULE_DIR_.TvcmsBlog::$ModuleName.'/views/templates/front/'.$template;
        }
        return false;
    }
    // end settings
    /*  tvcmsblog::uploadMedia('image'); */
    
    public static function uploadMedia($name, $dir = null)
    {
        if ($dir == null) {
            $dir = _PS_MODULE_DIR_.self::$ModuleName.'/views/img/';
        }
        $file_name = false;
        if (isset($_FILES[$name]) && isset($_FILES[$name]['tmp_name']) && !empty($_FILES[$name]['tmp_name'])) {
            $ext = Tools::substr($_FILES[$name]['name'], strrpos($_FILES[$name]['name'], '.') + 1);

            $basename_file_name = basename($_FILES[$name]["name"]);
            if (file_exists(_PS_MODULE_DIR_.self::$ModuleName.'/views/img/'.$basename_file_name)) {
                $basename_file_name = date("YmdHis")."_".$basename_file_name;
            }

            $strlen = Tools::strlen($basename_file_name);
            $strlen_ext = Tools::strlen($ext);
            $basename_file_name = Tools::substr($basename_file_name, 0, ($strlen-$strlen_ext));
            $link_rewrite_file_name = Tools::link_rewrite($basename_file_name);
            $link_rewrite_file_name = Tools::substr($link_rewrite_file_name, 0, 40);
            $file_name = $link_rewrite_file_name.'.'.$ext;
            $path = $dir.$file_name;
            $getAllImageTypes = TvcmsImageTypeClass::getAllImageTypes();

            if (!move_uploaded_file($_FILES[$name]['tmp_name'], $path)) {
                return false;
            } else {
                if (isset($getAllImageTypes) && !empty($getAllImageTypes)) {
                    foreach ($getAllImageTypes as $imagetype) {
                        // ImageManager::resize($path, $dir.$imagetype['name'].'-'
                            // .$file_name, (int)$imagetype['width'], (int)$imagetype['height'], $ext);
                        $w = (int)$imagetype['width'];
                        $h = (int)$imagetype['height'];
                        $resizeObj = new TvcmsBlogResizeClass($path);
                        $resizeObj->resizeImage($w, $h, 3);
                        $resizeObj->saveImage($dir.$imagetype['name'].'-'.$file_name);
                    }
                }
                return $file_name;
            }
        } else {
            return $file_name;
        }
    }
    
    public static function bulkuploadMedia($name, $dir = null)
    {

        
        if ($dir == null) {
            $dir = _PS_MODULE_DIR_.self::$ModuleName.'/views/img/';
        }
        $results_imgs = array();
        if (isset($_FILES[$name]) && isset($_FILES[$name]['tmp_name']) && !empty($_FILES[$name]['tmp_name'])) {
            foreach ($_FILES[$name]['name'] as $fileskey => $filesvalue) {
                // start upload
                if (isset($_FILES[$name])
                        && isset($_FILES[$name]['tmp_name'][$fileskey])
                        && !empty($_FILES[$name]['tmp_name'][$fileskey])
                    ) {
                    $ext = Tools::substr(
                        $_FILES[$name]['name'][$fileskey],
                        strrpos($_FILES[$name]['name'][$fileskey], '.') + 1
                    );
                    $basename_file_name = basename($_FILES[$name]["name"][$fileskey]);
                    $strlen = Tools::strlen($basename_file_name);
                    $strlen_ext = Tools::strlen($ext);
                    $basename_file_name = Tools::substr($basename_file_name, 0, ($strlen-$strlen_ext));
                    $link_rewrite_file_name = Tools::link_rewrite($basename_file_name);
                    $file_name = $link_rewrite_file_name.'.'.$ext;
                    $path = $dir.$file_name;
                    $getAllImageTypes = TvcmsImageTypeClass::getAllImageTypes();
                    if (move_uploaded_file($_FILES[$name]['tmp_name'][$fileskey], $path)) {
                        if (isset($getAllImageTypes) && !empty($getAllImageTypes)) {
                            foreach ($getAllImageTypes as $imagetype) {
                                // ImageManager::resize($path, $dir.$imagetype['name'].'-'
                                //     .$file_name, (int)$imagetype['width'], (int)$imagetype['height'], $ext);
                                $w = (int)$imagetype['width'];
                                $h = (int)$imagetype['height'];
                                $resizeObj = new TvcmsBlogResizeClass($path);
                                $resizeObj->resizeImage($w, $h, 3);
                                $resizeObj->saveImage($dir.$imagetype['name'].'-'.$file_name);
                            }
                        }
                        $results_imgs[] = $file_name;
                    }
                }
            }
            if (file_exists(TVCMSBLOG_IMG_DIR.'fileType')) {
                unlink(TVCMSBLOG_IMG_DIR.'fileType');
            }
            return $results_imgs;
        } else {
            return $results_imgs;
        }
    }
    
    public function hookexecute()
    {
        $results = array();
        $this->context->smarty->assign(array('results' => $results));
        return $this->display(__FILE__, 'views/templates/front/tvcmsblog.tpl');
    }
    
    public function insertdummyData($categories, $class)
    {
        $languages = Language::getLanguages(false);
        if (isset($categories) && !empty($categories)) {
            $classobj = new $class();
            foreach ($categories as $valu) {
                if (isset($valu['lang']) && !empty($valu['lang'])) {
                    foreach ($valu['lang'] as $valukey => $value) {
                        foreach ($languages as $language) {
                            if (isset($valukey)) {
                                $classobj->{$valukey}[$language['id_lang']] = isset($value) ? $value : '';
                            }
                        }
                    }
                }
                if (isset($valu['notlang']) && !empty($valu['notlang'])) {
                    foreach ($valu['notlang'] as $valukey => $value) {
                        if (isset($valukey)) {
                            if ($valukey == "id_shop") {
                                $classobj->{$valukey} = (int)Context::getContext()->shop->id;
                            } else {
                                $classobj->{$valukey} = $value;
                            }
                        }
                    }
                }
                $classobj->add();
            }
        }
    }

    public function reset()
    {
        $trn_tbl = array();
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcmscategory`';
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcmscategory_lang`';
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcmscategory_shop`';
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcmsposts`';
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcmsposts_lang`';
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcmsposts_shop`';
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcmspostmeta`';
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcms_image_type`';
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcms_category_post`';
        $trn_tbl[] = 'TRUNCATE `'._DB_PREFIX_.'tvcms_comments`';
        foreach ($trn_tbl as $table) {
            Db::getInstance()->execute($table);
        }
    }
    
    public function createDefaultData()
    {
        $this->reset();
        $id_lang = (int)Context::getContext()->language->id;
        $id_shop = (int)Context::getContext()->shop->id;
        $tvcmsblog_imagetype = '';
        $tvcmsblog_categories = '';
        $tvcmsblog_posts = '';
        include_once(dirname(__FILE__).'/data/dummy_data.php');
        $this->insertdummyData($tvcmsblog_imagetype, 'tvcmsimagetypeclass');
        $this->insertdummyData($tvcmsblog_categories, 'tvcmscategoryclass');
        $this->insertdummyData($tvcmsblog_posts, 'tvcmspostsclass');
        return true;
    }
    
    public function hookdisplayAdminAfterHeader()
    {
        $controller = Tools::getValue("controller");
        $configure = Tools::getValue("configure");
        $controllers = array("Admintvcmspost","Admintvcmscategory","Admintvcmscomment","Admintvcmsimagetype");
    }
}
