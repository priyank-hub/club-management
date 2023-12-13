<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminregistration;
use DB;

class login extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = adminregistration::all();
        return view("admin.adminlogin",compact('admin'));
    }
    public function show(Request $request)
    {
        $admin = DB::table('adminregistrations')->where([
            ['email', '=', $request->email],
            ['password', '=',$request->password],
        ])->first();
        print_r($admin);
        if($admin!=null)
        {
            session(['adminname'=>$admin->name]);
           // echo $admin->name;
            return redirect("/adhome");
        }
        else
        {
            return redirect("/adminlogin");
        }
    }
    public function home()
    {
        return view("admin.adminhome");
    }
    public function store()
    {
        $admin = adminregistration::all();
        return view("admin.forgotpassword",compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        session(['ademail'=>$request->email]);
        //  $emailad=session('ademail');
        // echo $emailad;

        $admin = DB::table('adminregistrations')->where([
            ['email', '=', $request->email],
        ])->get();

        if(sizeof($admin)>=1)
        {
            $ad = adminregistration::all();
            session(['adminid'=> $ad]);
            return view("admin.recoverpassword");
        }
        else
        {
            return redirect("/forgotpwd");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
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
    public function update(Request $request)
    {
        // $id=session('adminid');
        // echo $id;
        if($request->input('password') == $request->input('confirm_password'))
        {
            $emailad=session('ademail');
            $admin = adminregistration::query()
            ->where('email', '=', "{$emailad}")
            ->first();
            // echo $admin;
            $admin->password=$request->input('password');
            $admin->update();
            // echo "Updated";
            return redirect('/adminlogin');
        }
        else
        {
            return view("admin.recoverpassword");
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
        //
    }
    public function logout()
    {
        session()->forget('adminemail');
        return view("admin.adminlogin");
    }
}
