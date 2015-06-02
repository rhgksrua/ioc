<?php

use Rhgksrua\Ioc\Ioc;

class IocTest extends PHPUnit_Framework_TestCase {

    /**
     *
     * Registers an object and checks for registration
     *
     */
    public function testIocRegistersAClass()
    {
        // Mock of an object.
        $container = new Ioc;
        $dummyObj = $this->getMockBuilder('Dummy')->getMock();
        $container->register('dummy', function() {
            return $dummyObj;
        });
        $this->assertTrue($container->registered('dummy'));

        return $container;
    }

    /**
     * @depends testIocRegistersAClass
     *
     */
    public function testIocResolveRegisteredObject($container)
    {
    }
}
