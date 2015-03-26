<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link http://github.com/phergie/phergie-irc-plugin-react-pong for the canonical source repository
 * @copyright Copyright (c) 2008-2014 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license Simplified BSD License
 * @package Phergie\Irc\Plugin\React\Pong
 */

namespace Phergie\Irc\Tests\Plugin\React\Pong;

use Phake;
use Phergie\Irc\Bot\React\EventQueueInterface;
use Phergie\Irc\Event\EventInterface;
use Phergie\Irc\Plugin\React\Pong\Plugin;

/**
 * Tests for the Plugin class.
 *
 * @category Phergie
 * @package Phergie\Irc\Plugin\React\Pong
 */
class PluginTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests that the plugin responds to server ping events.
     */
    public function testPong()
    {
        $daemon = 'csd.bu.edu tolsun.oulu.fi';
        $event = Phake::mock('\Phergie\Irc\Event\EventInterface');
        Phake::when($event)->getParams()->thenReturn(array('server1' => $daemon));
        $queue = Phake::mock('\Phergie\Irc\Bot\React\EventQueueInterface');
        $plugin = new Plugin;
        $plugin->pong($event, $queue);
        Phake::verify($queue)->ircPong($daemon);
    }

    /**
     * Tests that getSubscribedEvents() returns an array.
     */
    public function testGetSubscribedEvents()
    {
        $plugin = new Plugin;
        $this->assertInternalType('array', $plugin->getSubscribedEvents());
    }
}
