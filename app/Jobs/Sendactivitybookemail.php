<?php

namespace App\Jobs;

use App\Notifications\LoginEmailNotification;
use App\Notifications\sendactivityemailnotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class Sendactivitybookemail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $email;

    /**
     * @param $email
     */
    public function __construct($email)
    {
        $this->email = $email;
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {

        Notification::route('mail',$this->email)->notify(new sendactivityemailnotification());

        //
    }
}
