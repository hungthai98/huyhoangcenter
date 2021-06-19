<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use Exception;
use GoDaddy\WordPress\MWC\Common\Events\Events;
use GoDaddy\WordPress\MWC\Payments\Events\RefundTransactionEvent;
use GoDaddy\WordPress\MWC\Payments\Models\Transactions\RefundTransaction;

/**
 * Can Issue Refunds Trait.
 *
 * @since x.y.z
 */
trait CanIssueRefundsTrait
{
    use AdaptsRequestsTrait;

    /** @var string refund transaction adapter class name */
    protected $refundTransactionAdapter;

    /**
     * Creates refund request
     *
     * @since x.y.z
     *
     * @param RefundTransaction $transaction
     *
     * @return RefundTransaction
     * @throws Exception
     */
    public function refund(RefundTransaction $transaction) : RefundTransaction
    {
        $request = $this->doAdaptedRequest($transaction, new $this->refundTransactionAdapter($transaction));

        Events::broadcast(new RefundTransactionEvent($request));

        return $request;
    }
}
