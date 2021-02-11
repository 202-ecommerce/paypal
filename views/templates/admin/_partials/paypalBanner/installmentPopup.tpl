{*
* 2007-2021 PayPal
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
*  @author 2007-2021 PayPal
*  @copyright PayPal
*  @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
*
*}

<div installment-popup class="modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="h3 pp__flex pp__justify-content-center pp__my-5">
          {l s='Offer your customers payment in 4X' mod='paypal'}
      </div>

      <div class="pp__flex pp__justify-content-center pp__mb-2">
        {l s='Now your customers can pay in 4 installments with PayPal!' mod='paypal'}
      </div>

      <div class="pp__flex pp__justify-content-center pp__mb-2">
          {l s='Improve your conversion rate by showing 4x payment information to your customers.' mod='paypal'}
      </div>

      <div class="pp__flex pp__justify-content-center pp__mb-5 pp__mt-4">
        <a
                class="btn btn-primary"
                href="{if isset($installmentController)}{$installmentController}{/if}"
        >
          {l s='Activer maintenant' mod='paypal'}
        </a>
      </div>
    </div>
  </div>
</div>

<script>
  window.addEventListener('load', function() {
      $('[installment-popup]').modal('show');
  });
</script>