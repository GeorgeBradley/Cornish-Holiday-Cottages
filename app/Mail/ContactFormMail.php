<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mail@ws239618-awt.remote.ac')
        ->markdown('template.client.contactform')
        ->with([
                'enquiry_title' => $this->user['enquiry_title'],
                'message' => $this->user['message'],
                'email' => $this->user['email'],
                'first_name' => $this->user['first_name'],
                'last_name' => $this->user['last_name'],
            ]);
    }
}
