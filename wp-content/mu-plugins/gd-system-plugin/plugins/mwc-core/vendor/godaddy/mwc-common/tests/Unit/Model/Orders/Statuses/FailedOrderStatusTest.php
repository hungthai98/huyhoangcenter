<?php

namespace GoDaddy\WordPress\MWC\Common\Tests\Unit\Model\Orders\Statuses;

use GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\FailedOrderStatus;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\FailedOrderStatus
 */
class FailedOrderStatusTest extends TestCase
{
    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\FailedOrderStatus::getName()
     */
    public function testCanGetName()
    {
        $this->assertEquals('failed', (new FailedOrderStatus())->getName());
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\FailedOrderStatus::getLabel()
     */
    public function testCanGetLabel()
    {
        $this->assertEquals('Failed', (new FailedOrderStatus())->getLabel());
    }
}
