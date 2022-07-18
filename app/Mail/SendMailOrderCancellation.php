<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailOrderCancellation extends Mailable
{
    use Queueable, SerializesModels;
    public $deleteOrderMail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($deleteOrderMail)
    {
        $this->deleteOrderMail = $deleteOrderMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ducndts2108004@fpt.edu.vn')->subject('Old order')->view('mails.send_mail_order_delete')->with('deleteOrderMail', $this->deleteOrderMail);
    }
}
