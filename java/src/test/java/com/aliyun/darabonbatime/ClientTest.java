package com.aliyun.darabonbatime;

import org.junit.Assert;
import org.junit.Test;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class ClientTest {

    @Test
    public void unixTest() throws Exception {
        Assert.assertEquals(10, Client.unix().length());
    }

    @Test
    public void UTCTest() throws Exception {
        Assert.assertTrue(Client.UTC().endsWith("UTC"));
    }

    @Test
    public void sleepTest() throws Exception {
        long start = System.currentTimeMillis();
        Client.sleep(100L);
        long end = System.currentTimeMillis();
        Assert.assertTrue((end - start) >= 100);
    }

    @Test
    public void formatTest() throws Exception {
        String pattern = "^[0-9]{8} [0-9]{2}:[0-9]{2} A|PM [a-zA-Z]+";
        Pattern r = Pattern.compile(pattern);
        String time = Client.format("yyyyMMdd hh:mm a EEEE");
        Matcher match = r.matcher(time);
        Assert.assertTrue(match.find());
    }
}
