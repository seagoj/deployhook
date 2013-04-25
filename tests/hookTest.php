<?php

class HookTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $_REQUEST['payload'] = file_get_contents('tests/payload.json');
    }

    public function tearDown()
    {
        unset($_REQUEST);
    }

    public function testHook()
    {
        $this->assertTrue(isset($_REQUEST['payload']));
    }
}

