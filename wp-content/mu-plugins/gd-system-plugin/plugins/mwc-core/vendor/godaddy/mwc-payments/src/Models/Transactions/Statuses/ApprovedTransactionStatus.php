<?php

namespace GoDaddy\WordPress\MWC\Payments\Models\Transactions\Statuses;

use GoDaddy\WordPress\MWC\Common\Traits\HasLabelTrait;
use GoDaddy\WordPress\MWC\Payments\Contracts\TransactionStatusContract;


/**
 * Transaction approved status.
 */
class ApprovedTransactionStatus implements TransactionStatusContract
{
    use HasLabelTrait;

    /**
     * Sets up the transaction status.
     */
    public function __construct()
    {
        $this->setName('approved');
        $this->setLabel('Approved');
    }
}
