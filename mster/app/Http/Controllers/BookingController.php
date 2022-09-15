<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;



class BookingController extends Controller
{
    public function book1(Request $request){
        $request->validate([
            'check_in'=>'required|date|after:yesterday',
            'check_out'=>'required|date|after:yesterday',
            'adults'=>'required',
            'children'=>'required',
            
        ]);

        $checkin=$request->input('check_in');
        $checkout=$request->input('check_out');



$data = DB::table('bookings')
          ->where([
                      ['check_in', '<=', $checkin],
                      ['check_out', '>=', $checkin]
                  ])
                  ->orWhere([
                      ['check_in', '<', $checkout],
                      ['check_out', '>=', $checkout]
                  ])
                  ->orWhere([
                      ['check_in', '>=', $checkin],
                      ['check_out', '<', $checkout]
                  ])
            
               ->get();



    // $data= Booking::where('check_in' ,$check_in)->get();


    $request->session()->put('check_in',  $request->check_in);
    $request->session()->put('check_out',  $request->check_out);
        
        $request->session()->put('adults', $request->adults);
        $request->session()->put('children', $request->children);
        $request->session()->put('data', $data);


        return redirect("book2")->with('data1', $data);



    }




    public function logout(){
        if(session('loginin')){
            session()->forget('loginin');
  
          return redirect('/room');
        }
  
      
    
}
}
