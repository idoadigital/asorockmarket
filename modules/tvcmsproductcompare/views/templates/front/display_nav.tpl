{**
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
* @author PrestaShop SA <contact@prestashop.com>
    * @copyright 2007-2022 PrestaShop SA
    * @license http://opensource.org/licenses/afl-3.0.php Academic Free License (AFL 3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {strip}
    <div class="tvcmsdesktop-view-compare">
        <a class="link_wishlist tvdesktop-view-compare tvcmscount-compare-product" href="{$link->getModuleLink('tvcmsproductcompare', 'productcomparelist')|escape:'html':'UTF-8'}" title="{l s='Product Compare' mod='tvcmsproductcompare'}">
            <div class="tvdesktop-compare-icon">
                {* <i class='material-icons'>&#xe043;</i> *}
                <svg class="add" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="15" height="15" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 960">
                    <path d="M402 442l40-55l-135-184H3v64h271zm517-175l-78 70q-7 7-8 16t5 16l6 8q7 7 17 7t17-7l127-115h.5l.5-1l8-8q7-6 7-15.5t-7-16.5l-8-8h-1v-1L876 94q-4-3-8.5-5t-9-2t-9 2t-7.5 5l-6 8q-6 7-5 16t8 16l76 69H684L274 779H3v64h304l410-576h202zm87 522h-1v-1L876 670q-5-4-11-6t-12.5 0t-10.5 6l-6 8q-4 4-5 10t1.5 12t6.5 10l77 70l-199-1l-115-177l-39 56l121 185l234 1l-77 69q-7 7-8 16t5 16l6 8q3 4 7.5 5.5t9 1.5t9-1.5t8.5-5.5l127-115h.5l.5-1l8-8q7-6 7-15.5t-7-16.5z" fill="#000000"></path>
                    <rect x="0" y="0" width="1024" height="960" fill="rgba(0, 0, 0, 0)"></rect>
                </svg>
            </div>
            <div class="tvdesktop-view-compare-name"> {l s='Compare' mod='tvcmsproductcompare'} <span class="count-product">({$tot_comp_prod})</span>
            </div>
        </a>
    </div>
    {/strip}