<?php

namespace App\Listeners;

use App\Events\ContactCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ContactCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ContactCreatedEvent $event): void
    {
        dd($event->contact->subject . " vient d'être envoyé ");
    }
}
