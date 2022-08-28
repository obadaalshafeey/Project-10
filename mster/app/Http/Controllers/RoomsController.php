<?php

namespace App\Http\Controllers;
use App\Models\img;

use App\Models\rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        return view("booking2");
    }

}






