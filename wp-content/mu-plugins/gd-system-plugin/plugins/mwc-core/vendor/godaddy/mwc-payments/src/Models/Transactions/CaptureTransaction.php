<?php

namespace GoDaddy\WordPress\MWC\Payments\Models\Transactions;

/**
 * Capture transaction.
 */
class CaptureTransaction extends AbstractTransaction
{
    /** @var string type */
    protected $type = 'capture';
}
