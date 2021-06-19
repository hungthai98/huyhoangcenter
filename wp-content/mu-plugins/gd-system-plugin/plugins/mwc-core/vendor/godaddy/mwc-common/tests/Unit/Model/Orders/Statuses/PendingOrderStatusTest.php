<?php

namespace GoDaddy\WordPress\MWC\Common\Tests\Unit\Model\Orders\Statuses;

use GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\PendingOrderStatus;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\PendingOrderStatus
 */
class PendingOrderStatusTest extends TestCase
{
    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\PendingOrderStatus::getName()
     */
    public function testCanGetName()
    {
        $this->assertEquals('pending', (new PendingOrderStatus())->getName());
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\PendingOrderStatus::getLabel()
     */
    public function testCanGetLabel()
    {
        $this->assertEquals('Pending payment', (new PendingOrderStatus())->getLabel());
    }
}
