<?php

namespace example\EventSubscribers;

use crisp\core\Router;
use crisp\Events\ThemeEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Contracts\EventDispatcher\Event;

use crisp\Controllers\EventController;
use crisp\core\Cron;
use crisp\core\Themes;
use example\views\controllers\StartPageController;
use crisp\types\RouteType;
use example\views\controllers\CronTestController;

class ThemeHookEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ThemeEvents::SETUP => 'onSetup',
            ThemeEvents::SETUP_CLI => 'onSetupCli',
        ];
    }

    public function onSetup(Event $event): void
    {
        Router::add("/", RouteType::PUBLIC, StartPageController::class);

        Themes::addRendererDirectory(Themes::getThemeDirectory() . "/iamnotincludedbydefault");

        EventController::getEventDispatcher()->addSubscriber(new TestEventSubscriber());
        $event->stopPropagation();
    }

    public function onSetupCli(Event $event): void
    {
        Cron::registerJob("30 * * * *", CronTestController::class, "execute");
        $event->stopPropagation();
    }
}
