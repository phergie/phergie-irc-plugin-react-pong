<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link http://github.com/phergie/phergie-irc-plugin-react-pong for the canonical source repository
 * @copyright Copyright (c) 2008-2014 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license Simplified BSD License
 * @package Phergie\Irc\Plugin\React\Pong
 */

namespace Phergie\Irc\Plugin\React\Pong;

use Phergie\Irc\Bot\React\AbstractPlugin;
use Phergie\Irc\Bot\React\EventQueueInterface;
use Phergie\Irc\Event\EventInterface;

/**
 * Plugin for responding to server ping events.
 *
 * @category Phergie
 * @package Phergie\Irc\Plugin\React\Pong
 */
class Plugin extends AbstractPlugin
{
    /**
     * Indicates that the plugin monitors server ping events.
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return array(
            'irc.received.ping' => 'pong',
        );
    }

    /**
     * Responds to server ping events.
     *
     * @param \Phergie\Irc\Event\EventInterface $event Ping event to respond to 
     * @param \Phergie\Irc\Bot\React\EventQueueInterface $queue
     */
    public function pong(EventInterface $event, EventQueueInterface $queue)
    {
        $params = $event->getParams();
        $queue->ircPong($params['server1']);
    }
}
