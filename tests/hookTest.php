<?php

class HookTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $_REQUEST['payload'] = "%7B%22ref%22%3A%22refs%2Fheads%2Fmaster%22%2C%22after%22%3A%22af6f25a697a3c6905e258e7b6f112e194c0840ae%22%2C%22before%22%3A%22158e6ea94253b5f8f911b9f81ec8a344805bf79f%22%2C%22created%22%3Afalse%2C%22deleted%22%3Afalse%2C%22forced%22%3Afalse%2C%22compare%22%3A%22https%3A%2F%2Fgithub.com%2Fseagoj%2Fhook%2Fcompare%2F158e6ea94253...af6f25a697a3%22%2C%22commits%22%3A%5B%7B%22id%22%3A%22bdbe71ec2a2927c8bb5296f9dad5128cb364b8f1%22%2C%22distinct%22%3Atrue%2C%22message%22%3A%22Update+and+rename+README.md+to+README.markdown%22%2C%22timestamp%22%3A%222013-04-24T11%3A03%3A18-07%3A00%22%2C%22url%22%3A%22https%3A%2F%2Fgithub.com%2Fseagoj%2Fhook%2Fcommit%2Fbdbe71ec2a2927c8bb5296f9dad5128cb364b8f1%22%2C%22author%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22committer%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22added%22%3A%5B%22README.markdown%22%5D%2C%22removed%22%3A%5B%22README.md%22%5D%2C%22modified%22%3A%5B%5D%7D%2C%7B%22id%22%3A%22a1b19c8913913d0260ab85fe2c22b4cabaa55140%22%2C%22distinct%22%3Atrue%2C%22message%22%3A%22Merge+branch+%27master%27+of+github.com%3Aseagoj%2Fhook%22%2C%22timestamp%22%3A%222013-04-24T11%3A21%3A44-07%3A00%22%2C%22url%22%3A%22https%3A%2F%2Fgithub.com%2Fseagoj%2Fhook%2Fcommit%2Fa1b19c8913913d0260ab85fe2c22b4cabaa55140%22%2C%22author%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22committer%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22added%22%3A%5B%22README.markdown%22%5D%2C%22removed%22%3A%5B%22README.md%22%5D%2C%22modified%22%3A%5B%5D%7D%2C%7B%22id%22%3A%223c5c4b537686f6b7e8952ab42b2d452186ee7980%22%2C%22distinct%22%3Atrue%2C%22message%22%3A%22Testing+travis%3A+shoudl+fail%22%2C%22timestamp%22%3A%222013-04-24T11%3A24%3A40-07%3A00%22%2C%22url%22%3A%22https%3A%2F%2Fgithub.com%2Fseagoj%2Fhook%2Fcommit%2F3c5c4b537686f6b7e8952ab42b2d452186ee7980%22%2C%22author%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22committer%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22added%22%3A%5B%5D%2C%22removed%22%3A%5B%5D%2C%22modified%22%3A%5B%22tests%2FhookTest.php%22%5D%7D%2C%7B%22id%22%3A%22af6f25a697a3c6905e258e7b6f112e194c0840ae%22%2C%22distinct%22%3Atrue%2C%22message%22%3A%22Fixes+purposeful+failure%22%2C%22timestamp%22%3A%222013-04-24T11%3A25%3A34-07%3A00%22%2C%22url%22%3A%22https%3A%2F%2Fgithub.com%2Fseagoj%2Fhook%2Fcommit%2Faf6f25a697a3c6905e258e7b6f112e194c0840ae%22%2C%22author%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22committer%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22added%22%3A%5B%5D%2C%22removed%22%3A%5B%5D%2C%22modified%22%3A%5B%22tests%2FhookTest.php%22%5D%7D%5D%2C%22head_commit%22%3A%7B%22id%22%3A%22af6f25a697a3c6905e258e7b6f112e194c0840ae%22%2C%22distinct%22%3Atrue%2C%22message%22%3A%22Fixes+purposeful+failure%22%2C%22timestamp%22%3A%222013-04-24T11%3A25%3A34-07%3A00%22%2C%22url%22%3A%22https%3A%2F%2Fgithub.com%2Fseagoj%2Fhook%2Fcommit%2Faf6f25a697a3c6905e258e7b6f112e194c0840ae%22%2C%22author%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22committer%22%3A%7B%22name%22%3A%22Jeremy+Seago%22%2C%22email%22%3A%22seagoj%40gmail.com%22%2C%22username%22%3A%22seagoj%22%7D%2C%22added%22%3A%5B%5D%2C%22removed%22%3A%5B%5D%2C%22modified%22%3A%5B%22tests%2FhookTest.php%22%5D%7D%2C%22repository%22%3A%7B%22id%22%3A8890769%2C%22name%22%3A%22hook%22%2C%22url%22%3A%22https%3A%2F%2Fgithub.com%2Fseagoj%2Fhook%22%2C%22description%22%3A%22Webhook+to+update+git+repositories+via+PHP%22%2C%22watchers%22%3A0%2C%22stargazers%22%3A0%2C%22forks%22%3A0%2C%22fork%22%3Afalse%2C%22size%22%3A292%2C%22owner%22%3A%7B%22name%22%3A%22seagoj%22%2C%22email%22%3A%22seagoj%40gmail.com%22%7D%2C%22private%22%3Afalse%2C%22open_issues%22%3A0%2C%22has_issues%22%3Atrue%2C%22has_downloads%22%3Atrue%2C%22has_wiki%22%3Atrue%2C%22language%22%3A%22PHP%22%2C%22created_at%22%3A1363731712%2C%22pushed_at%22%3A1366827626%2C%22master_branch%22%3A%22master%22%7D%2C%22pusher%22%3A%7B%22name%22%3A%22none%22%7D%7D";

        $payload = json_decode($_REQUEST['payload']);
    }

    public function tearDown()
    {
        unset($_REQUEST);
    }

    public function testHook()
    {
        $this->assertTrue(isset($_REQUEST['payload']));
//        $hook = new Hook();
    }
}

