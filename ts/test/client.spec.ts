import Client from '../src/client';
import assert from 'assert';
import moment from 'moment';
import 'mocha';

describe('Darabonba Time', function () {
  it('Module should ok', function () {
    assert.ok(Client);
  });

  it('unix should ok', function () {
    assert.deepStrictEqual(Client.unix().length, 10);
  });

  it('UTC should ok', function () {
    assert.ok(Client.UTC().endsWith('UTC'));
  });

  it('format should ok', function () {
    assert.deepStrictEqual(Client.format('yyyyMMdd hh:mm a EEEE'), moment().format('YYYYMMDD HH:mm A dddd'));
  });
});