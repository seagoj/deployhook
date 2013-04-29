<?php

class HookTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $_REQUEST['payload'] = file_get_contents('tests/payload.json');
        $_SERVER['HTTP_CLIENT_IP'] = '127.0.0.1';
        if(!is_dir('tests/docroot/hook')) mkdir('test/docroot/hook');
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
        $options = ['docroot'=>'tests/docroot'];

        $hook = new Hook($options);
        $this->assertInstanceOf('Hook', $hook);
    }
}

