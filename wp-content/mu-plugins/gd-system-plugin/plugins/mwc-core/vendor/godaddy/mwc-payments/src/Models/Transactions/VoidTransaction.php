<?php

namespace GoDaddy\WordPress\MWC\Payments\Models\Transactions;

/**
 * Void transaction.
 */
class VoidTransaction extends RefundTransaction
{
    /** @var string type */
    protected $type = 'void';
}
