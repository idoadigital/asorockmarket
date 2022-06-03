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
    <div class="tvproduct-wishlist">
        <input type="hidden" class="wishlist_prod_id" value="{$id_product|escape:'htmlall':'UTF-8'}">
        {if isset($wishlists) && !empty($wishlists) && count($wishlists) > 1}
        <div class="buttons_bottom_block no-print panel-product-line panel-product-actions" data-toggle="tvtooltip" data-placement="top" data-html="true" title="{l s='Add To Wishlist' mod='tvcmswishlist'}">
            <div id="wishlist_button">
                {foreach $wishlists as $wishlist}
                {if $wishlist.default == '1'}
                <a class="wishlist_button_extra" onclick="WishlistCart('wishlist_block_list', 'add', '{$id_product|intval}', $('#idCombination').val(), 1, {$wishlist.id_wishlist}); return false;">
                    <div class="panel-product-line panel-product-actions tvproduct-wishlist-icon">
                        <div class="tvproduct-wishlist-wrapper-icon">
                            <svg class="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="16px" height="16px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1040 928">
                                <path d="M288 66q73 0 180 106l46 45l45-46q15-16 31.5-30t32.5-26t31.5-21T684 78.5t27.5-9.5t24.5-3q89 0 157 68q69 69 69 166t-69 167q-5 4-359 387q-5 5-11 6.5t-10 1.5q-12 0-21-8q-324-360-359-395q-8-8-15.5-17.5t-14-19t-12-19.5t-10-20.5T74 361t-5.5-22t-3.5-23t-1-23q0-98 69-167q32-31 70-45.5T288 66zm0-64q-59 0-109 19T88 81q-43 43-65.5 99T0 292.5T22.5 405T88 504q9 9 49.5 53.5t91 100.5t100 111t83.5 92l34 37q27 28 66.5 28t67.5-28q354-383 358-386q88-88 88-212T938 89q-44-44-93.5-65.5T736 2q-53 0-111.5 35T513 126Q387 2 288 2z" fill="#000000" />
                                <rect x="0" y="0" width="1040" height="928" fill="rgba(0, 0, 0, 0)" /></svg>
                        </div>
                        {* <i class='material-icons'>&#xe87e;</i> *}
                        <span>{l s='Wishlist' mod='tvcmswishlist'}</span>
                    </div>
                </a>
                {/if}
                {/foreach}
                {* <select id="idWishlist">
                    {foreach $wishlists as $wishlist}
                    <option value="{$wishlist.id_wishlist|escape:'htmlall':'UTF-8'}">{$wishlist.name|escape:'htmlall':'UTF-8'}</option>
                    {/foreach}
                </select> *}
            </div>
        </div>
        {else}
        <a href="#" class="tvquick-view-popup-wishlist wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '{$id_product|intval}', $('#idCombination').val(), 1, 1); return false;" rel="nofollow" data-toggle="tvtooltip" data-placement="top" data-html="true" title="{l s='Add To Wishlist' mod='tvcmswishlist'}">
            <div class="panel-product-line panel-product-actions tvproduct-wishlist-icon">
                <div class="tvproduct-wishlist-wrapper-icon">
                    <svg aria-hidden="true" focusable="false" width="18" height="18" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1040 928">
                        <path d="M288 66q73 0 180 106l46 45l45-46q15-16 31.5-30t32.5-26t31.5-21T684 78.5t27.5-9.5t24.5-3q89 0 157 68q69 69 69 166t-69 167q-5 4-359 387q-5 5-11 6.5t-10 1.5q-12 0-21-8q-324-360-359-395q-8-8-15.5-17.5t-14-19t-12-19.5t-10-20.5T74 361t-5.5-22t-3.5-23t-1-23q0-98 69-167q32-31 70-45.5T288 66zm0-64q-59 0-109 19T88 81q-43 43-65.5 99T0 292.5T22.5 405T88 504q9 9 49.5 53.5t91 100.5t100 111t83.5 92l34 37q27 28 66.5 28t67.5-28q354-383 358-386q88-88 88-212T938 89q-44-44-93.5-65.5T736 2q-53 0-111.5 35T513 126Q387 2 288 2z" fill="#000000"></path>
                        <rect x="0" y="0" width="1040" height="928" fill="rgba(0, 0, 0, 0)"></rect>
                    </svg>
                    {* <i class='material-icons'>&#xe87e;</i> *}
                    <span>{l s='Wishlist' mod='tvcmswishlist'}</span>
                </div>
            </div>
        </a>
        {/if}
    </div>
    {/strip}