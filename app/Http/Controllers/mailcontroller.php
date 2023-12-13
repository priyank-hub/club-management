<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function html_email() 
    {
        $mname=session('membername');
       // $data = array('name'=>$mname);
       // print_r ($mname);
     //   print_r ($data);
        
        // Mail::send('user.mailcontent', $data, function($message) {
        //      $memberemail=session('email');
        //    $message->to($memberemail, '<b>Simple Text Mail</b>')->subject
        //       ('Your Booking at THE CLUBIES is confirmed');
        //    $message->from('happyclub@gmail.com','Happy Club');
        // });

        // echo "HTML Email Sent. Check your inbox.";
        return redirect('/success');
        //return view("user.room_book");
     }

     public function cancel_email() 
    {
        $mname=session('membername');
        // $data = array('name'=>$mname);
        // Mail::send('user.cancellationmail', $data, function($message) {
        //     $memberemail=session('email');
        //    $message->to($memberemail, '<b>Simple Text Mail</b>')->subject
        //       ('Your Booking at THE CLUBIES is Cancelled');
        //    $message->from('theclubies@gmail.com','The Clubies');
        // });
        // echo "HTML Email Sent. Check your inbox.";
        $id=session('bid');
        echo $id;
        // return redirect('cancellation/'.$id);
        return redirect('mrdetails/'.$id);
     }
     public function event_email() 
    {
        $mname=session('membername');
        $data = array('name'=>$mname);
       // print_r ($mname);
        //print_r ($data);
        
        // Mail::send('user.eventmail', $data, function($message) {
        //      $memberemail=session('email');
        //    $message->to($memberemail, '<b>Simple Text Mail</b>')->subject
        //       ('Your Booking at THE CLUBIES is confirmed');
        //    $message->from('theclubies@gmail.com','The Clubies');
        // });
        return view("user.event_book");
       // return redirect('/eventshow');
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}