<?php

namespace GoDaddy\WordPress\MWC\Common\Tests\Unit\Model\Orders;

use GoDaddy\WordPress\MWC\Common\Model\Orders\LineItem;
use GoDaddy\WordPress\MWC\Common\Model\CurrencyAmount;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\LineItem
 */
final class LineItemTest extends TestCase
{
    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\LineItem::getQuantity()
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\LineItem::setQuantity()
     */
    public function testCanSetGetLineItemQuantity()
    {
        $item = new LineItem();

        $qty = 5.0;

        $item->setQuantity($qty);

        $this->assertSame($qty, $item->getQuantity());
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\LineItem::setTaxAmount()
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\LineItem::getTaxAmount()
     */
    public function testCanSetGetLineItemTaxAmount()
    {
        $item = new LineItem();

        $amount = new CurrencyAmount();
        $amount->setAmount(500);
        $amount->setCurrencyCode('GBP');

        $item->setTaxAmount($amount);

        $this->assertSame($amount->getAmount(), $item->getTaxAmount()->getAmount());
        $this->assertSame($amount->getCurrencyCode(), $item->getTaxAmount()->getCurrencyCode());
    }
}
