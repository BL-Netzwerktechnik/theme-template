<?php

namespace example\EventSubscribers;

use crisp\Events\LicenseValidatedEvent;
use crisp\Events\LicenseValidationEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class TestEventSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            LicenseValidationEvent::class => 'onValidateLicense',
        ];
    }


    public function onValidateLicense(LicenseValidationEvent $event): void
    {
        #$event->addErrorMessage("This is a test error message");
        #$event->stopPropagation();
    }
}
