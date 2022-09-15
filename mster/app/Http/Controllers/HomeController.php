<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use App\User;
use Notification;
use App\Notifications\MyFirstNotification;

use App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }


    function index(){
    
        return view("home");
     }
     
     function changeLang($langcode){
      
        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }  


    public function sendNotification()
    {
        $user = User::first();
  
        $details = [
            'greeting' => 'Hi Artisan',
            'body' => 'This is my first notification from ItSolutionStuff.com',
            'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',
            'actionText' => 'View My Site',
            'actionURL' => url('/'),
            'order_id' => 101
        ];
  
        Notification::send($user, new MyFirstNotification($details));
   
        dd('done');
    }
}
