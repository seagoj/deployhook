<?php

class HookTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $_POST['payload'] = json_decode(file_get_contents('payload.json'));

        $this->logToFile($payload,'EMPTY', 'hookTest.log');
        
    }

    public function tearDown()
    {
        unset($_POST);
    }

    public function testHook()
    {
        $this->assertTrue(isset($_REQUEST['payload']));
//        $hook = new Hook();
    }

    private function logToFile($content, $result='EMPTY', $file="hook.log")
    {
            $endline = "\r\n";
            $content = $this->tapify($content, $result);

            print "<div>$content</div>";
            return file_put_contents($file, $content.$endline, FILE_APPEND);
    }

    private function tapify($content, $result) {
        $nextTest = $this->testCount+1;
        $prefix = 'ok '.$nextTest.' - ';
            
            if($result!=='EMPTY') {
                    $this->testCount = $nextTest;
                    $content = $prefix.$content;
                if(!$result) {
                    $content = 'not '.$content;
                }
            }

            return $content;
    }
}

