<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\admincontroller;
Route::get('/adminIndex',[admincontroller::class,'display']);


use App\Http\Controllers\login;
Route::get('/adminlogin',[login::class,'index']);
Route::post('/adminhome',[login::class,'show']);
Route::get('/forgotpwd',[login::class,'store']);
Route::get('/recoverpwd',[login::class,'create']);
Route::get('/adminedit',[login::class,'update']);
Route::get('/adhome',[login::class,'home']);
Route::get('/logout',[login::class,'logout']);

use App\Http\Controllers\faqcontroller;
Route::get('/faq',[faqcontroller::class,'display']);
Route::get('/faqform',[faqcontroller::class,'create']);
Route::post('/faqstore',[faqcontroller::class,'store']);
Route::get('/faqmsts',[faqcontroller::class,'index']);
Route::get('/faqedit/{id}',[faqcontroller::class,'edit']);
Route::put('/faqupdate/{id}',[faqcontroller::class,'update']);
Route::get('/faqdelete/{id}',[faqcontroller::class,'destroy']);
Route::get('/faqshow',[faqcontroller::class,'show']);

use App\Http\Controllers\event;
Route::get('/eventform',[event::class,'create']);
Route::post('/eventstore',[event::class,'store']);
Route::get('/eventmsts',[event::class,'index']);
Route::get('/eventedit/{id}',[event::class,'edit']);
Route::put('/eventupdate/{id}',[event::class,'update']);
Route::get('/eventdelete/{id}',[event::class,'destroy']);
Route::get('/eventshow',[event::class,'show']);
Route::get('/detail/{id}',[event::class,'details']);
Route::get('/eventregis',[event::class,'regis']);
//Route::get('/eventconfirmation',[event::class,'confirmation']);
Route::get('/etbook',[event::class,'eventbook']);

use App\Http\Controllers\bookevent;
Route::get('/bookevent',[bookevent::class,'create']);
Route::get('/bookeventstore',[bookevent::class,'store']);
Route::get('/bookeventmsts',[bookevent::class,'index']);

use App\Http\Controllers\userlogin;
Route::get('/userlogin',[userlogin::class,'login']);
Route::post('/loginstore',[userlogin::class,'store']);
Route::get('/userlogout',[userlogin::class,'logout']);
Route::get('/profile',[userlogin::class,'profile']);

use App\Http\Controllers\facility;
Route::get('/facilityform',[facility::class,'create']);
Route::post('/facilitystore',[facility::class,'store']);
Route::get('/facilitymsts',[facility::class,'index']);
Route::get('/facilityedit/{id}',[facility::class,'edit']);
Route::put('/facilityupdate/{id}',[facility::class,'update']);
Route::get('/facilitydelete/{id}',[facility::class,'destroy']);
Route::get('/facilityshow',[facility::class,'show']);

use App\Http\Controllers\membershiptype;
Route::get('/mstypeform',[membershiptype::class,'create']);
Route::post('/mstypestore',[membershiptype::class,'store']);
Route::get('/mstypemsts',[membershiptype::class,'index']);
Route::get('/mstypeedit/{id}',[membershiptype::class,'edit']);
Route::put('/mstypeupdate/{id}',[membershiptype::class,'update']);
Route::get('/mstypedelete/{id}',[membershiptype::class,'destroy']);
Route::get('/mstypedisplay',[membershiptype::class,'display']);

use App\Http\Controllers\membership;
Route::get('/msform',[membership::class,'create']);
Route::post('/msstore',[membership::class,'store']);
Route::get('/msmsts',[membership::class,'index']);
Route::get('/membershipedit/{id}',[membership::class,'edit']);
Route::put('/membershipupdate/{id}',[membership::class,'update']);
Route::get('/membershipdelete/{id}',[membership::class,'destroy']);

use App\Http\Controllers\dependent;
Route::get('/ddform',[dependent::class,'create']);
Route::post('/ddstore',[dependent::class,'store']);
Route::get('/ddmsts',[dependent::class,'index']);
Route::get('/dependentedit/{id}',[dependent::class,'edit']);
Route::put('/dependentupdate/{id}',[dependent::class,'update']);
Route::get('/dependentdelete/{id}',[dependent::class,'destroy']);

use App\Http\Controllers\roomcharges;
Route::get('/rcform',[roomcharges::class,'create']);
Route::post('/rcstore',[roomcharges::class,'store']);
Route::get('/rcmsts',[roomcharges::class,'index']);
Route::get('/roomchargesedit/{id}',[roomcharges::class,'edit']);
Route::put('/roomchargesupdate/{id}',[roomcharges::class,'update']);
Route::get('/roomchargesdelete/{id}',[roomcharges::class,'destroy']);
Route::get('/rcshow',[roomcharges::class,'show']);
Route::get('/rcdetail/{id}',[roomcharges::class,'details']);
Route::get('/rmbook',[roomcharges::class,'roombook']);
Route::get('/todaybookdisplay',[roomcharges::class,'todayroombooking']);
Route::get('/roombookdisplay',[roomcharges::class,'rmbookdisplay']);    

use App\Http\Controllers\bookroom;
Route::get('/roombook',[bookroom::class,'create']);
Route::post('/roomstore',[bookroom::class,'store']);
Route::get('/ckroom',[bookroom::class,'checkroom']);
//Route::get('/abc',[bookroom::class,'abc']);
Route::get('/bkshow',[bookroom::class,'show']);
Route::get('/checkout',[bookroom::class,'rmcheckout']);
Route::get('/success',[bookroom::class,'success']);
Route::get('/failure',[bookroom::class,'failure']);
Route::get('/ssid/{id}',[bookroom::class,'sid']);

use App\Http\Controllers\cancellationrule;
Route::get('/cruleform',[cancellationrule::class,'create']);
Route::get('/crulestore',[cancellationrule::class,'store']);
Route::get('/crulemsts',[cancellationrule::class,'index']);
Route::get('/cruleedit/{id}',[cancellationrule::class,'edit']);
Route::put('/cruleupdate/{id}',[cancellationrule::class,'update']);
Route::get('/cruledelete/{id}',[cancellationrule::class,'destroy']);
Route::get('/crules',[cancellationrule::class,'refundrate']);

use App\Http\Controllers\usercontroller;
Route::get('/userIndex',[usercontroller::class,'display']);

use App\Http\Controllers\homecontroller;
Route::get('/home',[homecontroller::class,'display']);
Route::get('/login',[homecontroller::class,'index']);

use App\Http\Controllers\contacts;
Route::get('/contactform',[contacts::class,'create']);
Route::post('/contactstore',[contacts::class,'store']);
Route::get('/aboutus',[contacts::class,'about']);
Route::get('/contactus',[contacts::class,'contact']);

use App\Http\Controllers\mybookings;
Route::get('/bookings',[mybookings::class,'mybooking']);
Route::get('/mrdetails/{id}',[mybookings::class,'bkdetails']);
Route::get('/cancellation/{id}',[mybookings::class,'cancellation']);

use App\Http\Controllers\showdetails;
Route::get('/event',[showdetails::class,'event']);
Route::get('/facility',[showdetails::class,'facility']);
Route::get('/room',[showdetails::class,'bkroom']);

use App\Http\Controllers\review;
Route::get('/review',[review::class,'index']);

Route::post('/storereview',[review::class,'store']);
Route::get('/showreview',[review::class,'show']);

use App\Http\Controllers\mailcontroller;
Route::get('/usermail',[mailcontroller::class,'html_email']);
Route::get('/cancelmail',[mailcontroller::class,'cancel_email']);
Route::get('/eventmail',[mailcontroller::class,'event_email']);

use App\Http\Controllers\pdfview;
Route::get('/generatepdf',[pdfview::class,'index']);