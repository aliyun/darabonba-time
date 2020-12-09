<?php

namespace AlibabaCloud\Darabonba\Time\Tests;

use AlibabaCloud\Darabonba\Time\Time;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class TimeTest extends TestCase
{
    public function testUnix()
    {
        $time = Time::unix(); // is string
        $this->assertFalse($time === (int) $time);
        $this->assertTrue(abs(time() - (int) $time) <= 3);
    }

    public function testUTC()
    {
        $t = sprintf('%.6f', strtotime('2020-02-29 23:11:48'));
        $t = bcadd($t, 0.123456, 6);
        $this->assertEquals('2020-02-29 23:11:48.123456 +0000 UTC', Time::UTC($t));
    }

    public function testSleep()
    {
        $start = microtime(true) * 1000;
        Time::sleep(200);
        $end = microtime(true) * 1000;
        $this->assertTrue($end - $start >= 200);
    }

    public function testFormat()
    {
        $res = Time::format('yyyyMMdd hh:mm:ss a EEEE', strtotime('2020-02-29 23:11:48'));
        $this->assertEquals('20200229 11:11:48 pm Saturday', $res);
    }
}
