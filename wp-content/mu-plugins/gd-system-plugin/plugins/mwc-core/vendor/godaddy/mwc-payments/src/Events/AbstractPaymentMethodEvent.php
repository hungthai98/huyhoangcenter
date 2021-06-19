<?php

namespace GoDaddy\WordPress\MWC\Payments\Events;

use GoDaddy\WordPress\MWC\Common\Events\Contracts\EventContract;
use GoDaddy\WordPress\MWC\Payments\Models\PaymentMethods\AbstractPaymentMethod;

/**
 * Payment method event abstract class.
 *
 * @since x.y.z
 */
abstract class AbstractPaymentMethodEvent implements EventContract
{
    /** @var AbstractPaymentMethod */
    protected $paymentMethod;

    /**
     * Gets the payment method the event belongs to.
     *
     * @since x.y.z
     *
     * @return AbstractPaymentMethod
     */
    public function getPaymentMethod() : AbstractPaymentMethod
    {
        return $this->paymentMethod;
    }
}
