<?php

namespace GoDaddy\WordPress\MWC\Common\Tests\Unit\Model\Orders;

use GoDaddy\WordPress\MWC\Common\Model\Orders\ShippingItem;
use GoDaddy\WordPress\MWC\Common\Model\CurrencyAmount;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\ShippingItem
 */
final class ShippingItemTest extends TestCase
{
    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\ShippingItem::setTaxAmount()
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\ShippingItem::getTaxAmount()
     */
    public function testCanSetGetShippingItemTaxAmount()
    {
        $item = new ShippingItem();

        $amount = new CurrencyAmount();
        $amount->setAmount(500);
        $amount->setCurrencyCode('GBP');

        $item->setTaxAmount($amount);

        $this->assertSame($amount->getAmount(), $item->getTaxAmount()->getAmount());
        $this->assertSame($amount->getCurrencyCode(), $item->getTaxAmount()->getCurrencyCode());
    }
}
