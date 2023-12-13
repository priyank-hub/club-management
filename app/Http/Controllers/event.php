<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eventmst;

class event extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = eventmst::all();
        return view("admin.eventdisplay",compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.event");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['eventname'=>'required',
        'fromdate'=>'required',
        'todate'=>'required',
        'starttime'=>'required',
        'endtime'=>'required',
        'charges'=>'required',
        'description'=>'required',
        'photo'=>'required | image | mimes:jpg,png,jpeg,gif,svg | max:2048'
    ]);

    if($request->file())
    {
        $filename = time().'_'.$request->photo->getClientOriginalName();
        $filepath = $request->file('photo')->storeAs('images',$filename,'public');

        $event = new eventmst;
        $event->eventname=$request->eventname;
        $event->fromdate=$request->fromdate;
        $event->todate=$request->todate;
        $event->starttime=$request->starttime;
        $event->endtime=$request->endtime;
        $event->charges=$request->charges;
        $event->description=$request->description;
        $event->photo=$filepath;
        $event->save();
        return redirect('/eventmsts');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $date=date('Y-m-d');
        $event=eventmst::query()
        ->where('fromdate', '>', "{$date}") 
        ->get();
       $event = eventmst::all();
        return view("user.eventshow",compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event= eventmst::find($id);
        return view("admin.eventedit",compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->file())
        {
            $filename = time().'_'.$request->photo->getClientOriginalName();
            $filepath = $request->file('photo')->storeAs('images',$filename,'public');

        $event=eventmst::find($id);
        $event->eventname=$request->input('eventname');
        $event->fromdate=$request->input('fromdate');
        $event->todate=$request->input('todate');
        $event->starttime=$request->input('starttime');
        $event->endtime=$request->input('endtime');
        $event->charges=$request->input('charges');
        $event->description=$request->input('description');
        $event->photo=$filepath;
        $event->update();
        return redirect("/eventmsts");
          
        }
        else
        {
            $event=eventmst::find($id);
            $event->eventname=$request->input('eventname');
            $event->fromdate=$request->input('fromdate');
            $event->todate=$request->input('todate');
            $event->starttime=$request->input('starttime');
            $event->endtime=$request->input('endtime');
            $event->charges=$request->input('charges');
            $event->description=$request->input('description');
            $event->update();

        return redirect("/eventmsts");
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $event = eventmst::find($id);
       $event->delete();
       return redirect('/eventmsts');
    }
    public function details($id)
    {
        $event = eventmst::find($id);
        session(['eventid'=> $id]);
        return view("user.eventdetails",compact('event'));
    }
    // public function regis()
    // {
    //     $event = eventmst::all();
    //     return view("user.eventregis",compact('event'));
    // }
    // public function confirmation()
    // {
    //     $event = eventmst::all();
    //     return view("user.eventconfirmation",compact('event'));
    // }
    public function eventbook()
    {
        $event = eventmst::all();
        $mname=session('membername');
        // echo $mname;
        if ($mname!=null)
        {
            return redirect('/bookevent');
        }
        else
        {
            session(['cpage'=>"event"]);
            return view("user.userlogin",compact('event')); 
        }
    }
    
}