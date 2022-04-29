<?php

namespace App\Listeners;

use App\Events\NewRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Mail;

class SendEmail
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
     * @param  \App\Events\NewRegistered  $event
     * @return void
     */
    public function handle(NewRegistered $event)
    {
        $user = $event->user;
        //write code of send mail
        Mail::send('mail',array(
                 'name' => $user->name,
            ), function($message) use ($user)
            {
               $message->from(env('MAIL_FROM_ADDRESS'),'IAmProperty  Company');
               $message->to($user->email, $user->name)->subject('Welcome To Our Company');
            });
    }
}
