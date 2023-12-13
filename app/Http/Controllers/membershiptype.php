<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\membershiptypemst;
use DB;
class membershiptype extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mstype=membershiptypemst::all();
       //print_r($mstype); 
       return view("admin.mstypedisplay",compact('mstype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.mstype");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'noofyear' => 'required',
            'charges' => 'required'
        ]);
        $mstype = new membershiptypemst;
        $mstype->type = $request->type;
        $mstype->noofyear = $request->noofyear;
        $mstype->charges = $request->charges;
        $mstype->save();
        /*echo $request->type;
        echo $request->noofyear;*/
        return redirect('/mstypemsts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mstype=membershiptypemst::find($id);
        return view("admin.mstypeedit",compact('mstype'));
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
        $mstype=membershiptypemst::find($id);
        $mstype->type=$request->input('type');
        $mstype->noofyear=$request->input('noofyear');
        $mstype->charges=$request->input('charges');
        $mstype->update();
        return redirect('mstypemsts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mstype = membershiptypemst::find($id);
        $mstype->delete();
       return redirect('mstypemsts');
    }
    public function display()
    {
        $mstype=membershiptypemst::all();
        // echo $mstype;
        return view("user.showmstype",compact('mstype'));
    }
}
