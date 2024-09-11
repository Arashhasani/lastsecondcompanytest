<?php

namespace App\Jobs;

use App\Models\Activity;
use App\Models\Booking;
use App\Models\User;
use App\Notifications\sendactivityemailnotification;
use App\Notifications\sendactivityemailnotificationreminder;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;

class Sendactivitybookemailreminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;



    /**
     * @param $email
     */
    public function __construct()
    {
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {


        foreach (Booking::query()->where('status','confirmed')->where('reminder_send',0)->get() as $booking){
            if (Activity::query()->where('id',$booking['activity_id'])->first()->start_date<now()->subDays(1)){
                Notification::route('mail',User::query()->where('id',Activity::query()->where('id',$booking['activity_id'])->first()->user_id)->first()->email)->notify(new sendactivityemailnotificationreminder());
                $booking->update([
                    'reminder_send'=>1,
                ]);

            }

        }

        //
    }
}
