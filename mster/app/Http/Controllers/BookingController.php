<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function book1(Request $request){
        $request->validate([
            'check_in'=>'required|date|after:yesterday',
           
            'adults'=>'required',
            'children'=>'required',
            
        ]);
        $check_in=$request->input('check_in');
    // $check_out=$request->input('check_out');

    $data= Booking::where('check_in' ,$check_in)->get();


    $request->session()->put('check_in',  $request->check_in);
        
        $request->session()->put('adults', $request->adults);
        $request->session()->put('children', $request->children);


        return redirect("book1")->with('data', $data);



    }
    
}
