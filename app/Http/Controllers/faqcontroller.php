<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faqmst;

class faqcontroller extends Controller
{
    public function display()
    {
        return view("admin.faq");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq=faqmst::all();
        return view("admin.faqdisplay",compact('faq'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("faq");
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
            'question' => 'required',
            'answer' => 'required'
        ]);
        $faq = new faqmst;
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->save();
        echo $request->question;
        echo $request->answer;
        return redirect('/faqmsts')->with('status','Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $faq = faqmst::all();
        return view("user.faqshow",compact('faq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq=faqmst::find($id);
        return view("admin.faqedit",compact('faq'));
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
        $faq=faqmst::find($id);
        $faq->question=$request->input('question');
        $faq->answer=$request->input('answer');
        $faq->update();
        return redirect('/faqmsts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq = faqmst::find($id);
        $faq->delete();
       return redirect("faqmsts");

    }
}