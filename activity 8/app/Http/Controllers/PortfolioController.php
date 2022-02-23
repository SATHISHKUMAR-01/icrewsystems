<?php

namespace App\Http\Controllers;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use App\Http\Requests\Validation;

use Illuminate\Http\Request;

use App\Models\User;

class PortfolioController extends Controller
{
   
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function projects(){
        return view('projects');
    }

    public function contact(){
        return view('contact');
    }

    public function save(Validation $request){

        
        $attributes = $request->validate([
            'name'=> 'required|min:3',
            'email' => 'required',
            'query' => 'required|max:255',
        ]);

       // dd($attributes);

        User::create($attributes);

        // $email = $request->email;

        $details = ['email' => $request->email];
        // dd($details);

        //  dd($email);

        SendEmailJob::dispatch($details);

        //  $job = (new SendEmailJob($details))->delay(Carbon::now()->addSeconds(10));
        
        // $job = (SendEmailJob$attributes)->delay(Carbon::now()->addSeconds(10));
        // dispatch($job);

        // SendEmailJob::dispatch($attributes)->delay(Carbon::now()->addSeconds(10));
        // return view('contact');
        return redirect()->back()->with('message','Submitted Successfully');
    }
}
