<?php

use crisp\Controllers\EventController;
use crisp\core\Cron;
use crisp\core\Router;
use crisp\core\Themes;
use example\views\controllers\StartPageController;
use crisp\types\RouteType;
use example\EventSubscribers\TestEventSubscriber;
use example\EventSubscribers\ThemeHookEventSubscriber;
use example\views\controllers\CronTestController;

class ThemeHook {
    public function __construct() {
        EventController::getEventDispatcher()->addSubscriber(new ThemeHookEventSubscriber());
    }
}
