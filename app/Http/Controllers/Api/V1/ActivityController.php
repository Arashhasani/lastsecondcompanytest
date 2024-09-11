<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Jobs\Sendactivitybookemail;
use App\Models\Activity;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities=Activity::query()->get();
        return response()->json(['status'=>1,'activities'=>$activities]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validdate=$request->validate([
            'name'=>['required'],
            'description'=>['required'],
            'pic'=>['required'],
            'location'=>['required'],
            'price'=>['required'],
            'available_slots'=>['required'],
            'start_date'=>['required','date_format:Y-m-d\TH:i'],
        ]);

        if (!is_null($request['pic'])){
            $request->validate([
                'pic'=>'required|mimes:png,jpg|max:1000',
            ]);

            $icon=$request->file('pic');
            $destination='img'.'/'.now()->year.'/'.now()->month.'/'.now()->day.'/';
            $iconname=Str::random(16);
            $icon->move(public_path($destination),$iconname.'.'.$icon->getClientOriginalExtension());
            $validdate['pic']='/'.$destination.$iconname.'.'.$icon->getClientOriginalExtension();

        }

        $activity=Activity::create($validdate);
        Sendactivitybookemail::dispatch();
        return response()->json(['status'=>1,'activity'=>$activity]);

        return redirect(route('adminactivities.index'));

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activity $activity)
    {

        $validdate=$request->validate([
            'name'=>['required'],
            'description'=>['required'],
            'pic'=>['required'],
            'location'=>['required'],
            'price'=>['required'],
            'available_slots'=>['required'],
            'start_date'=>['required','date_format:Y-m-d\TH:i'],
        ]);

        if (!is_null($request['pic'])){
            $request->validate([
                'pic'=>'required|mimes:png,jpg|max:1000',
            ]);

            $icon=$request->file('pic');
            $destination='img'.'/'.now()->year.'/'.now()->month.'/'.now()->day.'/';
            $iconname=Str::random(16);
            $icon->move(public_path($destination),$iconname.'.'.$icon->getClientOriginalExtension());
            $validdate['pic']='/'.$destination.$iconname.'.'.$icon->getClientOriginalExtension();

        }

        $activity->update($validdate);
        return response()->json(['status'=>1,'activity'=>$activity]);

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity=Activity::query()->where('id',$id)->firstOrFail();
        Booking::query()->where('activity_id',$activity['id'])->delete();
        $activity->delete();
        return response()->json(['status'=>1]);

        //
    }
}
