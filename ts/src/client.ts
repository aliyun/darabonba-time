// This file is auto-generated, don't edit it
/**
 * This is a time module
 */
import * as $tea from '@alicloud/tea-typescript';
import moment from 'moment';


export default class Client {

  /**
   * Return the time stamp string,unit second
   * @return the time string, e.g 1491888244
   */
  static unix(): string {
    return moment().unix().toString();
  }

  /**
   * Return the UTC time string now
   * @return the time string, e.g 2020-11-24 09:44:45.426237 +0000 UTC
   */
  static UTC(): string {
    return moment().format('YYYY-MM-DD HH:mm:ss.SSSSSS ZZ UTC');
  }

  /**
   * Suspends the current thread for the specified number of milliseconds.
   */
  static async sleep(millisecond: number): Promise<void> {
    return new Promise(resolve => {
      setTimeout(() => {
        resolve();
      }, millisecond)
    })
  }

  /**
   * Format the UTC time now with the layout
   * @param layout the format of time, e.g yyyyMMdd hh:mm a EEEE
   * @return the time string, e.g 20060102 15:04 PM Monday
   */
  static format(layout: string): string {
    layout = layout.replace(/y/g, 'Y')
      .replace(/d/g, 'D').replace(/h/g, 'H')
      .replace(/a/g, 'A').replace(/E/g, 'd');
    return moment().format(layout);
  }

}
