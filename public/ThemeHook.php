<?php

use crisp\Controllers\EventController;
use example\EventSubscribers\ThemeHookEventSubscriber;
use example\EventSubscribers\ThemePageErrorEventSubscriber;

class ThemeHook
{
    public function __construct()
    {
        EventController::getEventDispatcher()->addSubscriber(new ThemeHookEventSubscriber());
        EventController::getEventDispatcher()->addSubscriber(new ThemePageErrorEventSubscriber());
    }
}
