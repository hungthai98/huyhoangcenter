<?php

namespace GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses;

use GoDaddy\WordPress\MWC\Common\Contracts\OrderStatusContract;
use GoDaddy\WordPress\MWC\Common\Traits\HasLabelTrait;

/**
 * Class CompletedOrderStatus
 */
final class CompletedOrderStatus implements OrderStatusContract
{
    use HasLabelTrait;

    public function __construct()
    {
        $this->setName('completed')
            ->setLabel('Completed');
    }
}
