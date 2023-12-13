<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\facilitymst;

class facility extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facility=facilitymst::all();
        return view("admin.facilitydisplay",compact('facility'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.facility");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(['facilityname'=>'required',
        'charges'=>'required','description'=>'required',
        'photo'=>'required | image | mimes:jpg,png,jpeg,gif,svg | max:2048']);

        if($request->file())
        {
            $filename = time().'_'.$request->photo->getClientOriginalName();
            $filepath = $request->file('photo')->storeAs('images',$filename,'public');

            $facility=new facilitymst;
            $facility->facilityname=$request->facilityname;
            $facility->description=$request->description;
            $facility->charges=$request->charges;
            $facility->photo=$filepath;
            $facility->save();
            return redirect('/facilitymsts');
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
        $facility = facilitymst::all();
        return view("user.facilityshow",compact('facility'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facility=facilitymst::find($id);
        return view("admin.facilityedit",compact('facility'));
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

            $facility=facilitymst::find($id);
            $facility->facilityname=$request->input('facilityname');
            $facility->description=$request->input('description');
            $facility->charges=$request->input('charges');
            $facility->photo=$filepath;
            $facility->update();
           return redirect('/facilitymsts');
        }
        else
        {
            $facility=facilitymst::find($id);
            $facility->facilityname=$request->input('facilityname');
            $facility->description=$request->input('description');
            $facility->charges=$request->input('charges');
            $facility->update();
            return redirect('/facilitymsts');
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
        $facility = facilitymst::find($id);
        $facility->delete();
       return redirect('facilitymsts');
    }

   // public function details($id)
    //{
       // $facility = facilitymst::find($id);
        //return view("user.eventdetails",compact('event'));
    //}
    
   // public function regis()
    //{
      //  $event = eventmst::all();
        //return view("user.eventregis",compact('event'));
   // }
}
