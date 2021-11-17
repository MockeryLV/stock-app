<?php

namespace App\Listeners;

use App\Events\SentEmailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SentEmailNotification implements ShouldQueue
{


    /**
     * Handle the event.
     *
     * @param  \App\Events\SentEmailEvent  $event
     * @return void
     */
    public function handle(SentEmailEvent $event)
    {

    }
}
