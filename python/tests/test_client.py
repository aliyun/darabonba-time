import unittest
import time

from alibabacloud_darabonba_time.client import Client


class TestClient(unittest.TestCase):
    def test_unix(self):
        self.assertEqual(10, len(Client.unix()))

    def test_utc(self):
        self.assertEqual(len('2020-11-24 09:44:45.426237'),
                         len(Client.utc()))

    def test_sleep(self):
        t1 = time.time()
        Client.sleep(1500)
        self.assertTrue(1 < time.time() - t1 < 2)

    def test_format(self):
        self.assertEqual(len('20060102 15:04 PM'),
                         len(Client.format('yyyyMMdd hh:mm a')))

        week = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
        self.assertIn(Client.format('EEEE'), week)
