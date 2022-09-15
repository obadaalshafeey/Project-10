<?php

namespace App\Http\Controllers;
use App\Models\img;

use App\Models\rooms;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Auth;



class RoomsController extends Controller
{
    public function rooms(){
        $id=null;
        $collection=rooms::all();
        return view('rooms',compact('collection'));



    }
    public function room ($room_id )
    {
        $data = rooms::find($room_id);
        $data2 =DB::table('imgs')
        ->where('rooms_id',$room_id )
        ->get();
        $data3 =DB::table('services')
        ->where('rooms_id',$room_id )
        ->get();


        $data1 =DB::table('rooms')
        ->where('id',$room_id )
        ->get();
        return view('resrvition',compact('data','data1','data2','data3'));
        
    }

    public function book1 (){

        return view("booking");
    }
    
    public function book2 (){

        $data=DB::table('rooms')->get();
        return view("booking2",compact('data'));
    }
    public function book22 (Request $request){
        $request->validate([
            'rooms_id'=>'required',
            'payment'=>'required',
         
        ]);
        if ( $request->session()->has('loginin')){
    
        $create=new Booking();
        $create->rooms_id=$request->input('rooms_id');
        $create->payment=$request->input('payment');
        $create->total_price=$request->input('total_price');
        $create->check_in= session('check_in');
        $create->user_id=Auth::user()->id;
        $create->adults=session('adults');
        $create->children=session('children');
        $create->save();
        $request->session()->forget('check_in');
        $request->session()->forget('adults');
        $request->session()->forget('children');
return redirect('/room');}
else{
    $request->session()->put('rooms_id',  $request->input('rooms_id'));
    $request->session()->put('payment',  $request->input('payment'));
    $request->session()->put('total_price',  $request->input('total_price'));
    $request->session()->put('path',  '/book2');
    return redirect('/login');
}
       
    }

}






