<?php

namespace GoDaddy\WordPress\MWC\Payments\Tests\Unit\Models\PaymentMethods\BankAccounts\Types;

use GoDaddy\WordPress\MWC\Payments\Models\PaymentMethods\BankAccounts\Types\SavingsBankAccountType;
use PHPUnit\Framework\TestCase;

/**
 * @covers \GoDaddy\WordPress\MWC\Payments\Models\BankAccountTypes\SavingsBankAccountType
 */
class SavingsBankAccountTypeTest extends TestCase
{
    /**
     * @covers \GoDaddy\WordPress\MWC\Payments\Models\BankAccountTypes\SavingsBankAccountType::getName()
     */
    public function testCanGetName()
    {
        $this->assertEquals('savings', (new SavingsBankAccountType())->getName());
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Payments\Models\BankAccountTypes\SavingsBankAccountType::getLabel()
     */
    public function testCanGetLabel()
    {
        $this->assertEquals('Savings Account', (new SavingsBankAccountType())->getLabel());
    }
}
