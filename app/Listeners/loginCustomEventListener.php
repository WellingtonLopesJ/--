<?php

namespace App\Listeners;

use App\Events\loginCustomEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class loginCustomEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  loginCustomEvent  $event
     * @return void
     */
    public function handle(loginCustomEvent $event)
    {
        //
    }
}
