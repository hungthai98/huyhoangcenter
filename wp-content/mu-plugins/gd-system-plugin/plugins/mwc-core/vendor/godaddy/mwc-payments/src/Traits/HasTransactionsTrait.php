<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use GoDaddy\WordPress\MWC\Payments\Gateways\AbstractGateway;

/**
 * Has transactions trait.
 *
 * @since x.y.z
 */
trait HasTransactionsTrait
{
    //** @var string transactions gateway class name */
    protected $transactionsGateway;

    /**
     * Gets the transactions gateway instance.
     *
     * @since x.y.z
     *
     * @return AbstractGateway
     */
    public function transactions() : AbstractGateway
    {
        return new $this->transactionsGateway();
    }
}
