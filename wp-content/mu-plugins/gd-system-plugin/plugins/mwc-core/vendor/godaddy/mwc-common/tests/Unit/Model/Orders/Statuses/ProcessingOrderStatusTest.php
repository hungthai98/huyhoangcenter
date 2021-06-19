<?php

namespace GoDaddy\WordPress\MWC\Common\Tests\Unit\Model\Orders\Statuses;

use GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\ProcessingOrderStatus;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\ProcessingOrderStatus
 */
class ProcessingOrderStatusTest extends TestCase
{
    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\ProcessingOrderStatus::getName()
     */
    public function testCanGetName()
    {
        $this->assertEquals('processing', (new ProcessingOrderStatus())->getName());
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\Statuses\ProcessingOrderStatus::getLabel()
     */
    public function testCanGetLabel()
    {
        $this->assertEquals('Processing', (new ProcessingOrderStatus())->getLabel());
    }
}
