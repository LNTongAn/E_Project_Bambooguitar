<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data_mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_mail)
    {
        $this->data_mail = $data_mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ducndts2108004@fpt.edu.vn')->subject('New order')->view('mails.send_mail_order')->with('data_mail', $this->data_mail);
    }
}
