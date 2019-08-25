<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

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
        // define the vaiable which will create the dynamic body of mail 
        $this->data= $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //their we will build the mail body which email id should be send subject of an email and eamil body from view file.
        return $this->view('new@example.info')->subject('NewCustomer Enquiry')->view('dynamic_email_template')->with('data', $this->data);
    }
}
