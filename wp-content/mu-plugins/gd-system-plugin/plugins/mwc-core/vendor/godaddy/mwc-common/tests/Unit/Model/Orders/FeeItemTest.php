<?php

namespace GoDaddy\WordPress\MWC\Common\Tests\Unit\Model\Orders;

use GoDaddy\WordPress\MWC\Common\Model\Orders\FeeItem;
use GoDaddy\WordPress\MWC\Common\Model\CurrencyAmount;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\FeeItem
 */
final class FeeItemTest extends TestCase
{
    /**
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\FeeItem::setTaxAmount()
     * @covers \GoDaddy\WordPress\MWC\Common\Model\Orders\FeeItem::getTaxAmount()
     */
    public function testCanSetGetFeeItemTaxAmount()
    {
        $item = new FeeItem();

        $amount = new CurrencyAmount();
        $amount->setAmount(25);
        $amount->setCurrencyCode('EGP');

        $item->setTaxAmount($amount);

        $this->assertSame($amount->getAmount(), $item->getTaxAmount()->getAmount());
        $this->assertSame($amount->getCurrencyCode(), $item->getTaxAmount()->getCurrencyCode());
    }
}
