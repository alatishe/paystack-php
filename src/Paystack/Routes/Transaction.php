<?php

namespace Eidetic\Paystack\Routes;

use Eidetic\Paystack\Contracts\RouteInterface;

/**
 * Transaction
 * Insert description here
 *
 * @category
 * @package
 * @author
 * @copyright
 * @license
 * @version
 * @link
 * @see
 * @since
 */
class Transaction implements RouteInterface
{

    /**
      Root
     */
    public static function root()
    {
        return '/transaction';
    }
    /*
      Initialize transaction
     */

    /**
     * initialize
     * Insert description here
     *
     *
     * @return
     *
     * @access
     * @static
     * @see
     * @since
     */
    public static function initialize()
    {
        return [RouteInterface::METHOD_KEY   => RouteInterface::POST_METHOD,
            RouteInterface::ENDPOINT_KEY => Transaction::root() . '/initialize',
            RouteInterface::PARAMS_KEY   => ['reference',
                'amount',
                'email',
                'plan' ]
        ];
    }
    /*
      Charge authorization
     */

    /**
     * charge
     * Insert description here
     *
     *
     * @return
     *
     * @access
     * @static
     * @see
     * @since
     */
    public static function charge()
    {
        return [RouteInterface::METHOD_KEY   => RouteInterface::POST_METHOD,
            RouteInterface::ENDPOINT_KEY => Transaction::root() . '/charge_authorization',
            RouteInterface::PARAMS_KEY   => ['reference',
                'authorization_code',
                'email',
                'amount' ] ];
    }
    /*
      Charge token
     */

    /**
     * chargeToken
     * Insert description here
     *
     *
     * @return
     *
     * @access
     * @static
     * @see
     * @since
     */
    public static function chargeToken()
    {
        return [RouteInterface::METHOD_KEY   => RouteInterface::POST_METHOD,
            RouteInterface::ENDPOINT_KEY => Transaction::root() . '/charge_token',
            RouteInterface::PARAMS_KEY   => ['reference',
                'token',
                'email',
                'amount' ] ];
    }
    /*
      Get transaction
     */

    /**
     * getOne
     * Insert description here
     *
     *
     * @return
     *
     * @access
     * @static
     * @see
     * @since
     */
    public static function getOne()
    {
        return [RouteInterface::METHOD_KEY   => RouteInterface::GET_METHOD,
            RouteInterface::ENDPOINT_KEY => Transaction::root() . '/{id}',
            RouteInterface::ARGS_KEY     => ['id' ] ];
    }
    /*
      List transactions
     */

    /**
     * getList
     * Insert description here
     *
     *
     * @return
     *
     * @access
     * @static
     * @see
     * @since
     */
    public static function getList()
    {
        return [ RouteInterface::METHOD_KEY   => RouteInterface::GET_METHOD,
            RouteInterface::ENDPOINT_KEY => Transaction::root() ];
    }
    /*
      Get totals
     */

    /**
     * totals
     * Insert description here
     *
     *
     * @return
     *
     * @access
     * @static
     * @see
     * @since
     */
    public static function totals()
    {
        return [RouteInterface::METHOD_KEY   => RouteInterface::GET_METHOD,
            RouteInterface::ENDPOINT_KEY => Transaction::root() . '/totals' ];
    }
    /*
      Verify transaction
     */

    /**
     * verify
     * Insert description here
     *
     *
     * @return
     *
     * @access
     * @static
     * @see
     * @since
     */
    public static function verify()
    {
        return [RouteInterface::METHOD_KEY   => RouteInterface::GET_METHOD,
            RouteInterface::ENDPOINT_KEY => Transaction::root() . '/verify/{reference}',
            RouteInterface::ARGS_KEY     => ['reference' ] ];
    }
}
