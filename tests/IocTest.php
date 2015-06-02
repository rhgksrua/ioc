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
        $dummyObj = $this->getMock('Dummy');
        $dummyObj = $this->getMockBuilder('Dummy')->getMock();
        Ioc::register('dummy', function() {
            return $dummyObj;
        });
        $this->assertTrue(Ioc::registered('dummy'));

        return $dummyObj;
    }

    /**
     * @depends testIocRegistersAClass
     *
     */
    public function testIocResolveRegisteredObject()
    {
        /*
        $resolvedInstance = Ioc::resolve('dummy');
        $this->assertTrue($resolvedInstance instanceof $dummyObj);
         */
    }
}
