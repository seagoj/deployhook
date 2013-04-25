<?php
    class Hook {
        private $testCount;
        private $repository;
        private $docRoot;
        private $payload;

        public function __construct()
        {
//            $this->logToFile(date("m-d-Y H:i:s"));
//            $this->testCount = 0;
            
            if($this->checkIP() && $this->getPayload())
            {
                $this->repository = $this->payload->repository->name;
                $this->docRoot = '/var/www/'.escapeshellcmd($repository);

                $pathExists = is_dir($this->docRoot);
//                $this->logToFile('is_dir('.$this->docRoot.')', $pathExists);

                if($pathExists) {
                    $this->updateRepo();
                }
            }
        }

        private function checkIP()
        {
            if ( isset($_SERVER["REMOTE_ADDR"]) ) { 
                $requestIP = $_SERVER["REMOTE_ADDR"];
            } else if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) ) { 
                $requestIP = $_SERVER["HTTP_X_FORWARDED_FOR"];
            } else if ( isset($_SERVER["HTTP_CLIENT_IP"]) ) {
                $requestIP = $_SERVER["HTTP_CLIENT_IP"]; 
            } else $requestIP = '0.0.0.0';
            
            $validIPs = array(
                '72.1.161.68',
                '68.188.83.74',
                '204.232.175.75',
                '207.97.227.253',
                '50.57.128.197',
                '180.171.174.178'.
                '50.57.231.61',
                '54.235.183.49',
                '54.235.183.23',
                '54.235.118.251',
                '54.235.120.57',
                '54.235.120.61',
                '54.235.120.62',
                '127.0.0.1'
            );          
            
//            $this->logToFile(__METHOD__.'('.$requestIP.')', $result =
            in_array($requestIP, $validIPs));

            return $result;
        }

        private function getPayload($var='payload')
        {
            $this->payload = json_decode($_REQUEST[$var]);

            file_put_contents('tests/payload.json', $_REQUEST[$var]);

//            $this->logToFile(__METHOD__.'('.$var.')',$setPayload=isset($this->payload));

            return $setPayload;
        }

        private function updateRepo()
        {
            $actions = array(
                'cd'=>'cd '.$this->docRoot.$this->repository,
            //    'chown'=>'sudo chown -R http *',
            //    'gitReset'=>'git reset --hard HEAD',
                'gitPull'=>'git pull -u git://github.com/seagoj/'.$this->repository.'.git master',
                );

            $command = implode($actions, ' && ');
//            $this->logToFile($command, $setCommand = isset($command));

            if($setCommand)
                $output = shell_exec("$command 2>&1");

//            $this->logToFile($output, $output!=null);
        }

        public function __destruct()
        {
//            $postfix = '1..'.$this->testCount;
//            $this->logToFile($postfix);
//            $this->logToFile("\r\n");
        }
    }

new Hook();
