<?php

namespace example\EventSubscribers;

use crisp\Events\ThemePageErrorEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Contracts\EventDispatcher\Event;

class ThemePageErrorEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ThemePageErrorEvent::ROUTE_NOT_FOUND => 'onNotFound',
        ];
    }

    public function onNotFound(ThemePageErrorEvent $event): void
    {
        echo $event->getMessage();
        $event->stopPropagation();
    }
}
