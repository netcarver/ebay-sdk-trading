<?php

use DTS\eBaySDK\Trading\Types\ClassifiedAdShippingMethodEnabledDefinitionType;

class ClassifiedAdShippingMethodEnabledDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ClassifiedAdShippingMethodEnabledDefinitionType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\ClassifiedAdShippingMethodEnabledDefinitionType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
