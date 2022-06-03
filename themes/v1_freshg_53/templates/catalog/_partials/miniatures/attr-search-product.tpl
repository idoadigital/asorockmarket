{**
* 2007-2022 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
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
    * @license https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
    * International Registered Trademark & Property of PrestaShop SA
    *}
    {block name='product_miniature_item'}
    <article class="product-miniature js-product-miniature col-xl-3 col-md-4 tvproduct-slider  tvattr-search-all-product-wrapper-box" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
        <div class="tvproduct-wrapper grid">
            {block name='product_thumbnail'}
            <div class="tvproduct-image">
                {if $product.cover}
                <a href="{$product.url}" class="thumbnail product-thumbnail" itemprop="url">
                    <img src="{$product.cover.bySize['home_default']['url']}" alt="{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name}{/if}" class="tvproduct-defult-img tv-img-responsive" height="{$product.cover.bySize['home_default']['height']}" width="{$product.cover.bySize['home_default']['width']}" itemprop="image" loading="lazy">
                    {if Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG')}
                    {if isset($product.images.0.bySize['home_default']['url']) && empty($product.images.0.cover)}
                    <img class="tvproduct-hover-img tv-img-responsive" src="{$product.images.0.bySize['home_default']['url']}" alt="{$product.name}" height="{$product.images.0.bySize['home_default']['height']}" width="{$product.images.0.bySize['home_default']['width']}" itemprop="image" loading="lazy">
                    {elseif isset($product.images.1.bySize['home_default']['url']) && empty($product.images.1.cover)}
                    {if {Configuration::get('TVCMSCUSTOMSETTING_HOVER_IMG') != '0'}}
                    <img class="tvproduct-hover-img tv-img-responsive" src="{$product.images.1.bySize['home_default']['url']}" alt="{$product.name}" height="{$product.images.1.bySize['home_default']['height']}" width="{$product.images.1.bySize['home_default']['width']}" itemprop="image" loading="lazy">
                    {/if}
                    {/if}
                    {/if}
                </a>
                {else}
                <a href="{$product.url}" class="thumbnail product-thumbnail">
                    <img src="{$ImgDir}{$iso_code}-default-home_default.jpg" itemprop="image" class="tv-img-responsive" loading="lazy">
                </a>
                {/if}
                {block name='product_flags'}
                <ul class="tvproduct-flags tvproduct-online-new-wrapper">
                    {foreach from=$product.flags item=flag}
                    {if $flag.type == 'online-only' || $flag.type == 'new'}
                    <li>{$flag.label}</li>
                    {/if}
                    {/foreach}
                </ul>
                {*<ul class="tvproduct-flags tvproduct-sale-pack-wrapper">
                    {foreach from=$product.flags item=flag}
                    {if $flag.type == 'on-sale' || $flag.type == 'pack'}
                    <li class="product-flag {$flag.type}">{$flag.label}</li>
                    {/if}
                    {/foreach}
                </ul> *}
                {if $product.discount_type === 'percentage'}
                <ul class="tvproduct-flags tvproduct-sale-pack-wrapper">
                    <li>{$product.discount_percentage}</li>
                </ul>
                {elseif $product.discount_type === 'amount'}
                <span class="product-flag on-sale">{$product.discount_amount_to_display}</span>
                {/if}
                {/block}
                {if !empty($product.specific_prices.from) && !empty($product.specific_prices.to) && $product.specific_prices.from != '0000-00-00 00:00:00' && $product.specific_prices.to != '0000-00-00 00:00:00'}
                {include file='catalog/_partials/miniatures/product-timer.tpl' timer=$product.specific_prices.to}
                {/if}
                {if Configuration::get('TVCMSCUSTOMSETTING_PRODUCT_COLOR') == '1'}
                {block name='product_variants'}
                <div class='tvproduct-color'>
                    {if $product.main_variants}
                    {block name='product_variants'}
                    {assign var="isMore" value=4}
                    {assign var="colorCount" value=0}
                    {foreach from=$product.main_variants item=color_info}
                    {if $isMore == $colorCount && $isMore < count($product.main_variants)} <a href="javascript:void(0)" class='tvcmsmorecolor-icon'>
                        {(count($product.main_variants)-4)}
                        <i class='material-icons'>&#xe145;</i>
                        </a>
                        <span class="tvcmsmorecolor">
                            {/if}
                            {$colorCount = $colorCount+1}
                            <div class="tvproduct-color-box-border" data-toggle="tvtooltip" data-placement="top" data-html="true" data-original-title="{$color_info.name}">
                                <a href="{$color_info.url}" class='tvporoduct-color-box' style='{if $color_info.html_color_code != ""}background-color: {$color_info.html_color_code};{else}background-image: url({$color_info.texture});{/if}'>
                                </a>
                            </div>
                            {/foreach}
                            {if $isMore < $colorCount} <a href="javascript:void(0)" class='tvcmslesscolor-icon tvcmslesscolor-close'>
                                <i class='material-icons'>&#xe15b;</i>
                                </a>
                        </span>
                        {/if}
                        {/block}
                        {/if}
                </div>
                {/block}
                {/if}
            </div>
            {/block}
            <div class="tvproduct-info-box-wrapper">
                <div class="product-description">
                    {* Start Product Comment *}
                    {hook h='displayReviewProductList' product=$product}
                    {* End Product Comment *}
                    {block name='product_name'}
                    <div class="tvproduct-name product-title">
                        <a href="{$product.url}">
                            <h6 itemprop="name">{$product.name}</h6>
                        </a>
                    </div>
                    {* <div class="tvproduct-cat-name">{$product.category_name}</div> *}
                    {/block}
                    {block name='product_price_and_shipping'}
                    <div class="tv-product-price tvproduct-name-price-wrapper">
                        {if $product.show_price}
                        <div class="product-price-and-shipping">
                            <meta itemprop="sku" content="1234" />
                            <meta itemprop="mpn" content="1234" />
                            <meta itemprop="brand" content="fashion" />
                            <span class="price">{$product.price}</span>
                            {if $product.has_discount}
                            <span class="regular-price">{$product.regular_price}</span>
                            {/if}
                            {* {if $product.has_discount}
                            {hook h='displayProductPriceBlock' product=$product type="old_price"}
                            <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
                            {if $product.discount_type === 'percentage'}
                            <span class="discount-percentage discount-product tvproduct-discount-price">
                                {$product.discount_percentage}
                                {l s=' off' d='Shop.Theme.Catalog'}
                            </span>
                            {elseif $product.discount_type === 'amount'}
                            <span class="discount-amount discount-product tvproduct-discount-price">{$product.discount_amount_to_display} {l s=' off' d='Shop.Theme.Catalog'}</span>
                            {/if}
                            {/if}
                            {hook h='displayProductPriceBlock' product=$product type="before_price"}
                            <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span> *}
                            {hook h='displayProductPriceBlock' product=$product type='unit_price'}
                            {hook h='displayProductPriceBlock' product=$product type='weight'}
                        </div>
                        {/if}
                    </div>
                    {/block}
                </div>
                <div class='tvproduct-hover-btn'>
                    <div class="tvproduct-cart-btn">
                        <form action="{$urls.pages.cart}" method="post">
                            <input type="hidden" name="id_product" value="{$product.id_product}">
                            <input type="hidden" name="qty" value="1">
                            {if !empty($product.is_customizable) && count($product.customizations.fields)}
                            <input type="hidden" name="id_customization" value="{$product.id_customization}" id="product_customization_id">
                            {/if}
                            <input type="hidden" name="token" value="{$static_token}">
                            <button data-button-action="add-to-cart" type="submit" class="btn add-to-cart tvproduct-add-to-cart {if !$product.add_to_cart_url}tvproduct-out-of-stock disable{/if}" {if !$product.add_to_cart_url}disabled{/if} data-toggle="tvtooltip" data-placement="top" data-html="true" data-original-title="{if !$product.add_to_cart_url}{l s='Out Of Stock' d='Shop.Theme.Actions'}{else}{l s='Add To Cart' d='Shop.Theme.Actions'}{/if}">
                                {* <i class='material-icons add-cart'>&#xe854;</i> *}
                                <svg class="add-cart" version="1.1" id="Layer_1" x="0px" y="0px" width="18px" height="16px" viewBox="0 0 30.824 30" style="enable-background:new 0 0 30.824 30;" xml:space="preserve">
                                    <g>
                                        <path style="fill:#ffffff;" d="M29.903,4.511c-3.82-0.051-7.644-0.107-11.465-0.162c-3.771-0.054-7.543-0.108-11.315-0.155
        C6.903,4.191,6.799,4.138,6.73,3.907c-0.192-0.641-0.384-1.287-0.65-1.9C5.536,0.751,4.541,0.087,3.179,0.02
        C2.378-0.02,1.575,0.012,0.772,0.008C0.38,0.006,0.154,0.228,0,0.556c0,0.1,0,0.201,0,0.301C0.155,1.298,0.482,1.45,0.93,1.442
        c0.672-0.013,1.345-0.005,2.017-0.002c0.985,0.004,1.621,0.465,1.931,1.402c1.424,4.29,2.839,8.581,4.279,12.865
        c0.161,0.479,0.144,0.87-0.061,1.333c-1.026,2.322,0.585,4.772,3.118,4.773c4.496,0.002,8.991,0.001,13.486,0
        c0.109,0,0.223,0.002,0.329-0.016c0.351-0.057,0.595-0.343,0.6-0.686c0.006-0.35-0.223-0.629-0.58-0.694
        c-0.137-0.025-0.278-0.035-0.418-0.035c-4.454-0.002-8.909-0.001-13.364-0.001c-0.271,0-0.542-0.01-0.801-0.105
        c-1.048-0.391-1.516-1.537-1.076-2.595c0.136-0.328,0.271-0.541,0.698-0.579c2.207-0.196,4.41-0.439,6.614-0.669
        c2.622-0.273,5.243-0.56,7.867-0.823c1.585-0.159,2.94-1.198,3.396-2.73c0.501-1.688,0.834-3.421,1.264-5.129
        c0.199-0.792,0.341-1.599,0.598-2.378c0-0.1,0-0.201,0-0.301C30.656,4.655,30.328,4.517,29.903,4.511z M7.748,5.622
        c7.029,0.103,14.059,0.206,21.087,0.309c0.38,0.005,0.381,0.007,0.295,0.361c-0.478,1.963-0.955,3.926-1.436,5.889
        c-0.29,1.191-1.077,1.865-2.291,1.99c-3.201,0.331-6.399,0.669-9.6,1c-1.654,0.172-3.31,0.334-4.964,0.511
        c-0.177,0.019-0.244-0.032-0.297-0.193C9.486,12.27,8.424,9.053,7.364,5.835C7.342,5.771,7.333,5.702,7.314,5.621
        C7.469,5.621,7.608,5.619,7.748,5.622z" />
                                        <path style="fill:#ffffff;" d="M9.828,23.565c-1.762,0.006-3.208,1.456-3.209,3.219c0,1.772,1.434,3.212,3.204,3.216
        c1.767,0.005,3.215-1.428,3.231-3.195C13.07,25.048,11.588,23.56,9.828,23.565z M9.817,28.567
        c-0.984-0.011-1.769-0.805-1.765-1.787C8.057,25.801,8.857,25,9.832,25c0.973-0.001,1.781,0.804,1.787,1.778
        C11.624,27.763,10.805,28.577,9.817,28.567z" />
                                        <path style="fill:#ffffff;" d="M23.406,23.566c-1.766,0.012-3.205,1.463-3.199,3.227C20.213,28.57,21.644,30,23.418,30
        c1.783,0.001,3.233-1.457,3.216-3.232C26.616,24.999,25.16,23.554,23.406,23.566z M23.377,28.565
        c-0.982-0.026-1.786-0.862-1.745-1.813c0.044-0.995,0.846-1.769,1.815-1.751s1.786,0.854,1.763,1.806
        C25.184,27.805,24.364,28.592,23.377,28.565z" />
                                    </g>
                                </svg>
                                <i class='material-icons out-of-stock hide'>&#xe611;</i>
                                {* <span class="tvproduct-add-to-cart-label">{if !$product.add_to_cart_url}{l s='Out Of Stock' d='Shop.Theme.Actions'}{else}{l s='Add To Cart' d='Shop.Theme.Actions'}{/if} </span> *}
                            </button>
                        </form>
                    </div>
                    <div class="{* highlighted-informations{if !$product.main_variants} no-variants{/if} *} tvproduct-quick-btn">
                        {block name='quick_view'}
                        <a class="quick-view" href="#" data-link-action="quickview" data-toggle="tvtooltip" data-placement="top" data-html="true" title="{l s='Quick View' d='Shop.Theme.Actions'}" data-original-title="{l s='Quick View' d='Shop.Theme.Actions'}">
                            <div class="tvproduct-quick-icon">
                                {* <i class="material-icons search">&#xE8B6;</i> *}
                                <svg aria-hidden="true" focusable="false" width="14px" height="14px" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1056 896">
                                    <path d="M531 257q-39 0-74.5 15.5t-61 41t-41 61T339 449t15.5 75t41 61.5t61 40.5t74.5 15q53 0 97-25.5t69.5-69.5t25.5-97q0-79-56-135.5T531 257zm0 320q-34 0-64-17.5t-47.5-47T402 448q0-26 10-49.5t27.5-41t41-27.5t49.5-10q53 0 90.5 37.5T658 448t-37 91t-90 38zm509-136q0-1-.5-2.5t-.5-2.5t-.5-1.5l-.5-.5v-1l-1-2q-68-157-206-246.5T530 95q-107 0-206 39T144.5 249.5T18 431v2.5l-1 1.5v3l-1 2q-1 6-1 9q0 2 .5 4t.5 4q0 1 1 3v2l.5 1.5l.5.5v3q69 157 207.5 245.5T528 801q107 0 205.5-38.5T912 648t125-181q1 0 1-1v-1.5l.5-1l.5-.5v-3l1-2q1-6 1-9q0-2-.5-4t-.5-4zM528 737q-142 0-263-74.5T81 449q63-139 185-214.5T530 159q92 0 176.5 32T862 289.5T975 449q-63 139-184 213.5T528 737z" fill="#ffffff"></path>
                                    <rect x="0" y="0" width="1056" height="896" fill="rgba(0, 0, 0, 0)"></rect>
                                </svg>
                            </div>
                            {* <div class="tvproduct-quick-lable">
                                {l s='Quick View' d='Shop.Theme.Actions'}
                            </div> *}
                        </a>
                        {/block}
                    </div>
                    {hook h='displayWishlistBtnProductList' product=$product}
                    {hook h='displayProductCompareProductList' product=$product}
                </div>
                {* <div class="tv-product-price-info-box">
                    <div class='tvcmsstock-indicator-wraper'>
                        {hook h='displayProductListStockIndicator' product=$product}
                    </div>
                    {if Configuration::get('TVCMSCUSTOMSETTING_PRODUCT_COLOR') == '1'}
                    {block name='product_variants'}
                    {if $product.main_variants}
                    <div class="tvproduct-color">
                        {foreach from=$product.main_variants item=color_info}
                        <div class='tvproduct-color-wrapper'>
                            <a href="{$color_info.url}">
                                <div class="tvproduct-color-box-border">
                                    <div class='tvporoduct-color-box' style='{if $color_info.html_color_code != ""}background-color: {$color_info.html_color_code};{else}background-image: url({$color_info.texture});{/if}'></div>
                                </div>
                            </a>
                        </div>
                        {/foreach}
                    </div>
                    {/if}
                    {/block}
                    {/if}
                </div> *}
            </div>
        </div>
    </article>
    {/block}