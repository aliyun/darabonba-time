using System;
using AlibabaCloud.DarabonbaTime;
using Xunit;

namespace tests
{
    public class TimeTest
    {
        [Fact]
        public void Test_Unix()
        {
            Assert.Equal(10, Time.Unix().Length);
        }

        [Fact]
        public void Test_UTC()
        {
            Assert.Contains("+0000 UTC", Time.UTC());
        }

        [Fact]
        public void Test_Format()
        {
            Assert.NotNull(Time.Format("yyyy-MM-dd"));
            Assert.Equal(10, Time.Format("yyyy-MM-dd").Length);
        }
    }
}
