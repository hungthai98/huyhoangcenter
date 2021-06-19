<?php

namespace GoDaddy\WordPress\MWC\Common\Tests\Unit\Model\Orders;

use GoDaddy\WordPress\MWC\Common\Model\Orders\TaxItem;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoDaddy\WordPress\MWC\Common\Model\TaxItem
 */
final class TaxItemTest extends TestCase
{
    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\TaxItem::setRate()
     * @covers \GoDaddy\WordPress\MWC\Common\Model\TaxItem::getRate()
     */
    public function testCanSetGetTaxItemRate()
    {
        $item = new TaxItem();

        $rate = 1.5;

        $item->setRate($rate);
        $this->assertSame($rate, $item->getRate());
    }
}
