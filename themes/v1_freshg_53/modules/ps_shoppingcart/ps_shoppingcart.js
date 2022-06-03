/*
 * 2007-2022 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 *  @copyright  2007-2022 PrestaShop SA
 *  @version  Release: $Revision$
 *  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

$(document).ready(function() {
    prestashop.blockcart = prestashop.blockcart || {};

    var showModal = prestashop.blockcart.showModal || function(modal) {
        var $body = $('body');
        $body.append(modal);
        $body.one('click', '#blockcart-modal', function(event) {
            if (event.target.id === 'blockcart-modal') {
                $(event.target).remove();
            }
        });
    };

    prestashop.on(
        'updateCart',
        function(event) {
            var refreshURL = $('.blockcart').data('refresh-url');
            var requestData = {};
            if (event && event.reason) {
                requestData = {
                    id_customization: event.reason.idCustomization,
                    id_product_attribute: event.reason.idProductAttribute,
                    id_product: event.reason.idProduct,
                    action: event.reason.linkAction
                };
                // $('.tvproduct-add-to-cart').addClass("loading-wake");
                // $('.tvproduct-add-to-cart').addClass('tvcms-cart-loading');
                // $('.tvproduct-add-to-cart').html('<i class="material-icons add-cart">&#xe863;</i>');
                $.post(refreshURL, requestData).then(function(resp) {
                    $('.blockcart').replaceWith($(resp.preview).find('.blockcart'));
                    if (resp.modal) {
                        showModal(resp.modal);
                        // $('.tvproduct-add-to-cart').html('<svg class="add-cart" version="1.1" id="Layer_1" x="0px" y="0px" width="18px" height="16px" viewBox="0 0 30.824 30" style="enable-background:new 0 0 30.824 30;" xml:space="preserve"><g><path style="fill:#ffffff;" d="M29.903,4.511c-3.82-0.051-7.644-0.107-11.465-0.162c-3.771-0.054-7.543-0.108-11.315-0.155C6.903,4.191,6.799,4.138,6.73,3.907c-0.192-0.641-0.384-1.287-0.65-1.9C5.536,0.751,4.541,0.087,3.179,0.02C2.378-0.02,1.575,0.012,0.772,0.008C0.38,0.006,0.154,0.228,0,0.556c0,0.1,0,0.201,0,0.301C0.155,1.298,0.482,1.45,0.93,1.442c0.672-0.013,1.345-0.005,2.017-0.002c0.985,0.004,1.621,0.465,1.931,1.402c1.424,4.29,2.839,8.581,4.279,12.865c0.161,0.479,0.144,0.87-0.061,1.333c-1.026,2.322,0.585,4.772,3.118,4.773c4.496,0.002,8.991,0.001,13.486,0c0.109,0,0.223,0.002,0.329-0.016c0.351-0.057,0.595-0.343,0.6-0.686c0.006-0.35-0.223-0.629-0.58-0.694c-0.137-0.025-0.278-0.035-0.418-0.035c-4.454-0.002-8.909-0.001-13.364-0.001c-0.271,0-0.542-0.01-0.801-0.105c-1.048-0.391-1.516-1.537-1.076-2.595c0.136-0.328,0.271-0.541,0.698-0.579c2.207-0.196,4.41-0.439,6.614-0.669c2.622-0.273,5.243-0.56,7.867-0.823c1.585-0.159,2.94-1.198,3.396-2.73c0.501-1.688,0.834-3.421,1.264-5.129c0.199-0.792,0.341-1.599,0.598-2.378c0-0.1,0-0.201,0-0.301C30.656,4.655,30.328,4.517,29.903,4.511z M7.748,5.622c7.029,0.103,14.059,0.206,21.087,0.309c0.38,0.005,0.381,0.007,0.295,0.361c-0.478,1.963-0.955,3.926-1.436,5.889c-0.29,1.191-1.077,1.865-2.291,1.99c-3.201,0.331-6.399,0.669-9.6,1c-1.654,0.172-3.31,0.334-4.964,0.511c-0.177,0.019-0.244-0.032-0.297-0.193C9.486,12.27,8.424,9.053,7.364,5.835C7.342,5.771,7.333,5.702,7.314,5.621C7.469,5.621,7.608,5.619,7.748,5.622z" /><path style="fill:#ffffff;" d="M9.828,23.565c-1.762,0.006-3.208,1.456-3.209,3.219c0,1.772,1.434,3.212,3.204,3.216c1.767,0.005,3.215-1.428,3.231-3.195C13.07,25.048,11.588,23.56,9.828,23.565z M9.817,28.567c-0.984-0.011-1.769-0.805-1.765-1.787C8.057,25.801,8.857,25,9.832,25c0.973-0.001,1.781,0.804,1.787,1.778C11.624,27.763,10.805,28.577,9.817,28.567z" /><path style="fill:#ffffff;" d="M23.406,23.566c-1.766,0.012-3.205,1.463-3.199,3.227C20.213,28.57,21.644,30,23.418,30c1.783,0.001,3.233-1.457,3.216-3.232C26.616,24.999,25.16,23.554,23.406,23.566z M23.377,28.565c-0.982-0.026-1.786-0.862-1.745-1.813c0.044-0.995,0.846-1.769,1.815-1.751s1.786,0.854,1.763,1.806C25.184,27.805,24.364,28.592,23.377,28.565z" /></g></svg><i class="material-icons out-of-stock hide">&#xe611;</i > ');
                        $('.tvproduct-add-to-cart').removeClass('tvcms-cart-loading');
                        $('.tvproduct-add-to-cart').removeClass('loading-wake');
                    }
                }).fail(function(resp) {
                    prestashop.emit('handleError', { eventType: 'updateShoppingCart', resp: resp });
                });
            }
            if (event && event.resp && event.resp.hasError) {
                prestashop.emit('showErrorNextToAddtoCartButton', { errorMessage: event.resp.errors.join('<br/>') });
            }
        }
    );
});