<?php

namespace App\Mail;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    // public $posts;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        //
        $posts = Post::all();
        // for ($i = 0; $i < 10; $i++)
            $this->details = $details;
        // endfor
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->subject('Mail From Ecommerce Media')->view('emails.TestMail');
    }
}
