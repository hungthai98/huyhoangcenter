<?php

namespace GoDaddy\WordPress\MWC\Payments\Models\Transactions;

/**
 * Refund transaction.
 */
class RefundTransaction extends AbstractTransaction
{
    /** @var string|null reason for refund */
    private $reason;

    /** @var string type */
    protected $type = 'refund';

    /**
     * Gets the refund reason, if present.
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Sets the refund reason.
     *
     * @param string $reason
     * @return RefundTransaction
     */
    public function setReason(string $reason) : RefundTransaction
    {
        $this->reason = $reason;

        return $this;
    }
}
