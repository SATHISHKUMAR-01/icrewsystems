<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmailMailable;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    // public $attributes;
    /**
     * Create a new job instance.
     *
     * @return void
      */
    // public function __construct($attributes)
    // {
    //     $this->attributes = $attributes;
    // }

    protected $details;

    

    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    { 
        // Mail::to($this->attributes['email'])->send(new SendEmailMailable());
        
        // Mail::to($this->email)->send(new SendEmailMailable());

        // Mail::to($email)->send(new SendEmailMailable());
        $email = new SendEmailMailable();
        Mail::to($this->details['email'])->send($email);

    }
}
