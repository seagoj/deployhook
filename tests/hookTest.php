<?php

class HookTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $_REQUEST['payload'] = json_decode(file_get_content('tests/payload.json'));
        $_SERVER['HTTP_CLIENT_IP'] = '127.0.0.1';
    }

    public function tearDown()
    {
        unset($_REQUEST);
        unset($_SERVER['HTTP_CLIENT_IP']);
    }

    public function testPayload()
    {
        $this->assertTrue(isset($_REQUEST['payload']));
    }
    
    public function testHook()
    {
        $hook = new Hook();
        $this->assertInstanceOf('Hook', $hook);
    }
}

