<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $orderMail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderMail)
    {
        $this->orderMail = $orderMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('ducndts2108004@fpt.edu.vn')->subject('Old order')->view('mails.send_mail_order_confirm')->with('orderMail', $this->orderMail);
    }
}
