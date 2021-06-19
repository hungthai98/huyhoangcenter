<?php

namespace GoDaddy\WordPress\MWC\Payments\Events;

use GoDaddy\WordPress\MWC\Payments\Models\Transactions\PaymentTransaction;

/**
 * Payment transaction event.
 *
 * @since x.y.z
 */
class PaymentTransactionEvent extends AbstractTransactionEvent
{
    /**
     * Sets the payment transaction the event is for.
     *
     * @param PaymentTransaction $transaction
     */
    public function __construct(PaymentTransaction $transaction)
    {
        $this->transaction = $transaction;
    }
}
