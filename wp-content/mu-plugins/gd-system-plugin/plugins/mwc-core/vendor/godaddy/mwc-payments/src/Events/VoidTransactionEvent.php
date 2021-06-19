<?php

namespace GoDaddy\WordPress\MWC\Payments\Events;

use GoDaddy\WordPress\MWC\Payments\Models\Transactions\VoidTransaction;

/**
 * Void transaction event.
 *
 * @since x.y.z
 */
class VoidTransactionEvent extends AbstractTransactionEvent
{
    /**
     * Sets the void transaction the event is for.
     *
     * @param VoidTransaction $transaction
     */
    public function __construct(VoidTransaction $transaction)
    {
        $this->transaction = $transaction;
    }
}
