<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data=$data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    /**
     * @param mixed $data
     */

    public function build()
    {
        if (session()->get('type')=='Price') {
            return $this->subject('Ask for price list')->view('emails.SendEmail');
        }
        if (session()->get('type')=='Partner'){
            return $this->subject('Become a partner')->view('emails.SendEmail');
        }
        if (session()->get('type')=='Contact'){
            return $this->subject('Contact us')->view('emails.SendEmail');
        }
    }

}

