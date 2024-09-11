<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Booking;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ActivityController extends Controller
{

    public function activityPage(Activity $activity)
    {


        return view('webb.tourpage',compact('activity'));
        dd('sdssd');

    }


    public function activityBookPage(Activity $activity)
    {
        return view('webb.bookpage',compact('activity'));

        dd($activity);

    }

    public function activityBookPageSubmit(Request  $request,Activity $activity)
    {

        $validdata=$request->validate([
            'slots'=>['required','numeric']
        ]);

        if ($request['slots']>$activity['available_slots']){
            return back()->withErrors(['slots is greater that available slots']);
        }

        Booking::create([
            'user_id'=>auth()->user()->id,
            'activity_id'=>$activity['id'],
            'slots_booked'=>$request['slots'],
            'status'=>'pending',
        ]);

        Alert::success('Success', 'Your activity has been booked');

        return redirect(route('web.index'));


        dd($request->all());

    }

    //
}
