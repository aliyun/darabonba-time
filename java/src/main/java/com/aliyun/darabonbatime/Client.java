// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.darabonbatime;

import com.aliyun.tea.*;

import java.time.LocalDateTime;
import java.time.ZoneOffset;
import java.time.format.DateTimeFormatter;

public class Client {

    /**
     * Return the time stamp string,unit second
     *
     * @return the time string, e.g 1491888244
     */
    public static String unix() throws Exception {
        return String.valueOf(System.currentTimeMillis() / 1000);
    }

    /**
     * Return the UTC time string now
     *
     * @return the time string, e.g 2020-11-24 09:44:45.426237 +0000 UTC
     */
    public static String UTC() throws Exception {
        return LocalDateTime.now(ZoneOffset.UTC).toString();
    }

    /**
     * Suspends the current thread for the specified number of milliseconds.
     */
    public static void sleep(Long t) throws Exception {
        sleep(t);
    }

    /**
     * Format the UTC time now with the layout
     *
     * @param layout the format of time, e.g yyyyMMdd hh:mm a EEEE
     * @return the time string, e.g 20060102 15:04 PM Monday
     */
    public static String format(String layout) throws Exception {
        return LocalDateTime.now(ZoneOffset.UTC).format(DateTimeFormatter.ofPattern(layout));
    }
}
