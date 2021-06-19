<?php

namespace GoDaddy\WordPress\MWC\Payments\Tests\Unit\Providers;

use GoDaddy\WordPress\MWC\Payments\Providers\AbstractProvider;
use PHPUnit\Framework\TestCase;
use GoDaddy\WordPress\MWC\Payments\Tests\TestHelpers;

/**
 * @covers \GoDaddy\WordPress\MWC\Payments\Providers\AbstractProvider
 */
class AbstractProviderTest extends TestCase
{
    /** @var AbstractProvider|\PHPUnit\Framework\MockObject\MockObject */
    protected $abstractProviderMock;

    protected function setUp() : void
    {
        $this->abstractProviderMock = $this->getMockForAbstractClass(AbstractProvider::class);
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Payments\Providers\AbstractProvider::__call()
     */
    public function testWrongMethodRaisesException()
    {
        $this->expectException(\BadMethodCallException::class);
        $this->expectExceptionMessage('Call to undefined method GoDaddy\WordPress\MWC\Payments\Providers\AbstractProvider::nonExistantMethod');

        $this->abstractProviderMock->nonExistantMethod();
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Payments\Providers\AbstractProvider::getDescription()
     */
    public function testCanGetDescription()
    {
        TestHelpers::setInaccessibleProperty($this->abstractProviderMock, AbstractProvider::Class, 'description', 'Test description');

        $this->assertEquals('Test description', $this->abstractProviderMock->getDescription());
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Payments\Providers\AbstractProvider::getName()
     */
    public function testCanGetName()
    {
        TestHelpers::setInaccessibleProperty($this->abstractProviderMock, AbstractProvider::class,'name', 'Test name');

        $this->assertEquals('Test name', $this->abstractProviderMock->getName());
    }

    /**
     * @covers \GoDaddy\WordPress\MWC\Payments\Providers\AbstractProvider::getLabel()
     */
    public function testCanGetLabel()
    {
        TestHelpers::setInaccessibleProperty($this->abstractProviderMock, AbstractProvider::class,'label', 'Test label');

        $this->assertEquals('Test label', $this->abstractProviderMock->getLabel());
    }
}
