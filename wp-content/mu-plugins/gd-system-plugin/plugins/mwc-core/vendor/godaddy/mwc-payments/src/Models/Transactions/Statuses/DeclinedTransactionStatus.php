<?php

namespace GoDaddy\WordPress\MWC\Payments\Models\Transactions\Statuses;

use GoDaddy\WordPress\MWC\Common\Traits\HasLabelTrait;
use GoDaddy\WordPress\MWC\Payments\Contracts\TransactionStatusContract;

/**
 * Transaction declined status.
 */
class DeclinedTransactionStatus implements TransactionStatusContract
{
    use HasLabelTrait;

    /**
     * Sets up the transaction status.
     */
    public function __construct()
    {
        $this->setName('declined');
        $this->setLabel('Declined');
    }
}
