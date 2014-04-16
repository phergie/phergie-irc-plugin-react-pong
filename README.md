# phergie/phergie-irc-plugin-react-pong

A plugin for [Phergie](http://github.com/phergie/phergie-irc-bot-react/) to
respond to server ping events.

[![Build Status](https://secure.travis-ci.org/phergie/phergie-irc-plugin-react-pong.png?branch=master)](http://travis-ci.org/phergie/phergie-irc-plugin-react-pong)

## Install

The recommended method of installation is [through composer](http://getcomposer.org).

```JSON
{
    "require": {
        "phergie/phergie-irc-plugin-react-pong": "dev-master"
    }
}
```

See Phergie documentation for more information on installing plugins.

## Configuration

This plugin requires no configuration.

## Tests

To run the unit test suite:

```
curl -s https://getcomposer.org/installer | php
php composer.phar install
cd tests
../vendor/bin/phpunit
```

## License

Released under the BSD License. See `LICENSE`.
