<?php

namespace GoDaddy\WordPress\MWC\Payments\Events;

use GoDaddy\WordPress\MWC\Common\Events\Contracts\EventContract;
use GoDaddy\WordPress\MWC\Payments\Models\Transactions\AbstractTransaction;

/**
 * Payment transaction event abstract class.
 *
 * @since x.y.z
 */
abstract class AbstractTransactionEvent implements EventContract
{
    /** @var AbstractTransaction */
    protected $transaction;

    /**
     * Gets transaction the event belongs to.
     *
     * @since x.y.z
     *
     * @return AbstractTransaction
     */
    public function getTransaction() : AbstractTransaction
    {
        return $this->transaction;
    }
}
