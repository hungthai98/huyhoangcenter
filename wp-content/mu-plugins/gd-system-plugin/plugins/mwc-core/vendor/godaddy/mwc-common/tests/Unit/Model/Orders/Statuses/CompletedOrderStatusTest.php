<?php

namespace GoDaddy\WordPress\MWC\Common\Tests\Unit\Model\Orders\Statuses;

use GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\CompletedOrderStatus;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\CompletedOrderStatus
 */
class CompletedOrderStatusTest extends TestCase
{
    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\CompletedOrderStatus::getName()
     */
    public function testCanGetName()
    {
        $this->assertEquals('completed', (new CompletedOrderStatus())->getName());
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\CompletedOrderStatus::getLabel()
     */
    public function testCanGetLabel()
    {
        $this->assertEquals('Completed', (new CompletedOrderStatus())->getLabel());
    }
}
