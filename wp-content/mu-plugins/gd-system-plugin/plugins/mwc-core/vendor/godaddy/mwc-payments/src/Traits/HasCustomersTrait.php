<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use GoDaddy\WordPress\MWC\Payments\Gateways\AbstractGateway;

/**
 * Has customers trait.
 *
 * @since x.y.z
 */
trait HasCustomersTrait
{
    /** @var string customers gateway class */
    protected $customersGateway;

    /**
     * Gets the customers gateway instance.
     *
     * @since x.y.z
     *
     * @return AbstractGateway
     */
    public function customers() : AbstractGateway
    {
        return new $this->customersGateway();
    }
}
