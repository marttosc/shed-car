<?php

namespace Shed\Listeners;

use Ramsey\Uuid\Uuid;
use Shed\Events\NewUserRegistered;

class GenerateUserToken
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
     * @param  NewUserRegistered $event
     * @return void
     */
    public function handle(NewUserRegistered $event)
    {
        $event->user->token = Uuid::uuid1()->toString();
        $event->user->save();
    }
}
