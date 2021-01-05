/**
 * This is a time module
 */
// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Threading;


namespace AlibabaCloud.DarabonbaTime
{
    public class Time 
    {
        private static readonly DateTime Jan1st1970 = new DateTime(1970, 1, 1, 0, 0, 0, DateTimeKind.Utc);
        
        /**
         * Return the time stamp string,unit second
         * @return the time string, e.g 1491888244
         */
        public static string Unix()
        {
            return ((long)(DateTime.UtcNow - Jan1st1970).TotalSeconds).ToString();
        }

        /**
         * Return the UTC time string now
         * @return the time string, e.g 2020-11-24 09:44:45.426237 +0000 UTC
         */
        public static string UTC()
        {
            return DateTime.UtcNow.ToString("yyyy-MM-dd HH:mm:ss.ffffff '+0000 UTC'");
        }

        /**
         * Suspends the current thread for the specified number of milliseconds.
         */
        public static void Sleep(int t)
        {
            Thread.Sleep(t);
        }

        /**
         * Format the UTC time now with the layout
         * @param layout the format of time, e.g yyyyMMdd hh:mm a EEEE
         * @return the time string, e.g 20060102 15:04 PM Monday
         */
        public static string Format(string layout)
        {
            return DateTime.UtcNow.ToString(layout);
        }

    }
}
