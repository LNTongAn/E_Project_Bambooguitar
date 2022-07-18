<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailContact extends Mailable
{
    use Queueable, SerializesModels;
    public $contact_mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_mail)
    {
        $this->contact_mail = $contact_mail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ducndts2108004@fpt.edu.vn')->subject('Customer contact')->view('mails.send_mail_contact')->with('contact_mail', $this->contact_mail);
    }
}
