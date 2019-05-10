<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to a commercial license from SARL 202 ecommerce
 * Use, copy, modification or distribution of this source file without written
 * license agreement from the SARL 202 ecommerce is strictly forbidden.
 * In order to obtain a license, please contact us: tech@202-ecommerce.com
 * ...........................................................................
 * INFORMATION SUR LA LICENCE D'UTILISATION
 *
 * L'utilisation de ce fichier source est soumise a une licence commerciale
 * concedee par la societe 202 ecommerce
 * Toute utilisation, reproduction, modification ou distribution du present
 * fichier source sans contrat de licence ecrit de la part de la SARL 202 ecommerce est
 * expressement interdite.
 * Pour obtenir une licence, veuillez contacter 202-ecommerce <tech@202-ecommerce.com>
 * ...........................................................................
 *
 * @author    202-ecommerce <tech@202-ecommerce.com>
 * @copyright Copyright (c) 202-ecommerce
 * @license   Commercial license
 * @version   develop
 */

namespace PaypalPPBTlib\Extensions\ProcessLogger\Classes;

use \ObjectModel;

class ProcessLoggerObjectModel extends ObjectModel
{
    /** @var string log */
    public $log;

    /* @var int id_order*/
    public $id_order;

    /* @var int id_cart*/
    public $id_cart;

    /* @var int id_shop*/
    public $id_shop;

    /* @var string id_transaction*/
    public $id_transaction;

    /* @var string status*/
    public $status;

    /* @var bool sandbox*/
    public $sandbox;

    /* @var string tools*/
    public $tools;

    /* @var string creation date*/
    public $date_add;

    /* @var string date of transaction*/
    public $date_transaction;

    /**
     * @see \ObjectModel::$definition
     */
    public static $definition = array(
        'table'        => 'paypal_processlogger',
        'primary'      => 'id_paypal_processlogger',
        'fields'       => array(
            'id_order'     => array(
                'type'     => ObjectModel::TYPE_INT,
                'validate' => 'isUnsignedId',
                'size'     => 11,
            ),
            'id_cart'     => array(
                'type'     => ObjectModel::TYPE_INT,
                'validate' => 'isUnsignedId',
                'size'     => 11,
            ),
            'id_shop'     => array(
                'type'     => ObjectModel::TYPE_INT,
                'validate' => 'isUnsignedId',
                'size'     => 11,
            ),
            'id_transaction'     => array(
                'type'     => ObjectModel::TYPE_STRING,
                'validate' => 'isGenericName',
                'size'     => 50,
            ),
            'log'     => array(
                'type'     => ObjectModel::TYPE_STRING,
                'validate' => 'isGenericName',
                'size'     => 100,
            ),
            'status'     => array(
                'type'     => ObjectModel::TYPE_STRING,
                'validate' => 'isGenericName',
                'size'     => 20,
            ),
            'sandbox'     => array(
                'type'     => ObjectModel::TYPE_BOOL,
                'validate' => 'isBool'
            ),
            'tools'     => array(
                'type'     => ObjectModel::TYPE_STRING,
                'validate' => 'isGenericName',
                'size'     => 50,
            ),
            'date_add'     => array(
                'type'     => ObjectModel::TYPE_DATE,
                'validate' => 'isDate',
            ),
            'date_transaction'     => array(
                'type'     => ObjectModel::TYPE_DATE,
                'validate' => 'isDate',
            ),
        ),
    );

    public function getLinkToTransaction()
    {
        throw new \Exception('Need to define the method ' . __FUNCTION__);
    }
}
