<?php

class HookTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $_REQUEST['payload'] = "test";
    }

    public function tearDown()
    {
        unset($_REQUEST)
    }

    public function testHook()
    {
        $this->assertEquals($_REQUEST['payload'], "test");
//        $hook = new Hook();
    }
}

