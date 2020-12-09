<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\Darabonba\Time;

/**
 * This is a time module.
 */
class Time
{
    /**
     * Return the time stamp string,unit second.
     *
     * @return string the time string, e.g 1491888244
     */
    public static function unix()
    {
        return (string)time();
    }

    /**
     * Return the UTC time string now.
     *
     * @param int $time unix second
     *
     * @return string the time string, e.g 2020-11-24 09:44:45.426237 +0000 UTC
     */
    public static function UTC($time = null)
    {
        if (null === $time) {
            $m = substr((string) microtime(), 1, 7);

            return gmdate("Y-m-d H:i:s{$m} +0000 \\U\\T\\C", $time);
        }
        $m = bcsub($time, (int) $time, 6);
        $m = substr((string) $m, 1, 7);

        return gmdate("Y-m-d H:i:s{$m} +0000 \\U\\T\\C", $time);
    }

    /**
     * Suspends the current thread for the specified number of milliseconds.
     *
     * @param int $t
     */
    public static function sleep($t)
    {
        usleep($t * 1000);
    }

    /**
     * Format the UTC time now with the layout.
     *
     * @param string $layout the format of time, e.g yyyyMMdd hh:mm a EEEE
     * @param int    $time   unix second
     *
     * @return string the time string, e.g 20060102 15:04 PM Monday
     */
    public static function format($layout, $time = null)
    {
        $map  = [
            'yyyy' => 'Y',
            'MM'   => 'm',
            'dd'   => 'd',
            'HH'   => 'H',
            'hh'   => 'h',
            'mm'   => 'i',
            'ss'   => 's',
            'EEEE' => '%\w%',
        ];
        $week = [
            'Sunday',
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
        ];
        $w    = $week[(int) date('w', $time)];
        foreach ($map as $s => $t) {
            $layout = str_replace($s, $t, $layout);
        }
        $d = gmdate($layout, $time);

        return str_replace('%w%', $w, $d);
    }
}
