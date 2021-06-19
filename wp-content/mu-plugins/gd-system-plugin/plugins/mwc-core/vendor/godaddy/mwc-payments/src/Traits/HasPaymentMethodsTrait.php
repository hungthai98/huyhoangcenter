<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use GoDaddy\WordPress\MWC\Payments\Gateways\AbstractGateway;

/**
 * Has payment methods trait.
 *
 * @since x.y.z
 */
trait HasPaymentMethodsTrait
{
    /** @var string payment methods gateway class name */
    protected $paymentMethodsGateway;

    /**
     * Gets the payment methods gateway instance.
     *
     * @since x.y.z
     *
     * @return AbstractGateway
     */
    public function paymentMethods() : AbstractGateway
    {
        return new $this->paymentMethodsGateway();
    }
}
