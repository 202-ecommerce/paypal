<?php
/**
 * 2007-2019 PrestaShop
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
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2019 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */
use PaypalPPBTlib\Extensions\ProcessLogger\Classes\ProcessLoggerObjectModel;
/**
 * Class PaypalLog.
 */
class PaypalLog extends ProcessLoggerObjectModel
{
    public function getTimePayPal()
    {
        $dateServer = DateTime::createFromFormat('Y-m-d H:i:s', $this->date_add);
        if ($dateServer == false) {
            return '';
        }
        $timeZonePayPal = new DateTimeZone('PST');
        $dateServer->setTimezone($timeZonePayPal);
        return $dateServer->format('Y-m-d H:i:s');
    }

    public function getLinkToTransaction()
    {
        if ($this->sandbox) {
            $url = 'https://www.sandbox.paypal.com/myaccount/transactions/?free_text_search=';
        } else {
            $url = 'https://www.paypal.com/myaccount/transactions/?free_text_search=';
        }

        return $url . $this->id_transaction;
    }
}
