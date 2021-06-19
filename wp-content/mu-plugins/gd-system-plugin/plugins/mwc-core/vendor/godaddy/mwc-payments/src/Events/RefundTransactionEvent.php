<?php

namespace GoDaddy\WordPress\MWC\Payments\Events;

use GoDaddy\WordPress\MWC\Payments\Models\Transactions\RefundTransaction;

/**
 * Refund transaction event.
 *
 * @since x.y.z
 */
class RefundTransactionEvent extends AbstractTransactionEvent
{
    /**
     * Sets the refund transaction the event is for.
     *
     * @param RefundTransaction $transaction
     */
    public function __construct(RefundTransaction $transaction)
    {
        $this->transaction = $transaction;
    }
}
