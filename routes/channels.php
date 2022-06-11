<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated public can listen to the channel.
|
*/

Broadcast::channel('App.Models.public.{id}', function ($public, $id) {
    return (int) $public->id === (int) $id;
});
