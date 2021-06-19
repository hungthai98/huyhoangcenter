<?php

namespace GoDaddy\WordPress\MWC\Payments\Events;

use GoDaddy\WordPress\MWC\Payments\Models\PaymentMethods\AbstractPaymentMethod;

/**
 * Event intended for when a payment method is created.
 *
 * @since x.y.z
 */
class CreatePaymentMethodEvent extends AbstractPaymentMethodEvent
{
    /**
     * Sets the payment method the event is related to.
     *
     * @since x.y.z
     */
    public function __construct(AbstractPaymentMethod $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }
}
