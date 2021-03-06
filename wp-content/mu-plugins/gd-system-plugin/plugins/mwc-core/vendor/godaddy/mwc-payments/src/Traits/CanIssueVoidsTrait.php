<?php

namespace GoDaddy\WordPress\MWC\Payments\Traits;

use Exception;
use GoDaddy\WordPress\MWC\Common\Events\Events;
use GoDaddy\WordPress\MWC\Payments\Events\VoidTransactionEvent;
use GoDaddy\WordPress\MWC\Payments\Models\Transactions\VoidTransaction;

/**
 * Can Issue Voids Trait.
 *
 * @since x.y.z
 */
trait CanIssueVoidsTrait
{
    use AdaptsRequestsTrait;

    /** @var string Void Transaction Adapter class */
    protected $voidTransactionAdapter;

    /**
     * Issues void transaction request.
     *
     * @since x.y.z
     *
     * @param VoidTransaction $transaction
     *
     * @return VoidTransaction
     * @throws Exception
     */
    public function void(VoidTransaction $transaction) : VoidTransaction
    {
        $request = $this->doAdaptedRequest($transaction, new $this->voidTransactionAdapter($transaction));

        Events::broadcast(new VoidTransactionEvent($request));

        return $request;
    }
}
