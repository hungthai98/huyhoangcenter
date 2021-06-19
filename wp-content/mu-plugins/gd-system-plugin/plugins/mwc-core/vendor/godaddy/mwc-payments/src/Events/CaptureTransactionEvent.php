<?php

namespace GoDaddy\WordPress\MWC\Payments\Events;

use GoDaddy\WordPress\MWC\Payments\Models\Transactions\CaptureTransaction;

/**
 * Capture transaction event.
 *
 * @since x.y.z
 */
class CaptureTransactionEvent extends AbstractTransactionEvent
{
    /**
     * Sets the capture transaction the event is for.
     *
     * @param CaptureTransaction $transaction
     */
    public function __construct(CaptureTransaction $transaction)
    {
        $this->transaction = $transaction;
    }
}
