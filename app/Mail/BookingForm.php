<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingForm extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->user = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mail@ws239618-awt.remote.ac')
        ->markdown('template.client.booking_form')
        ->with([
                'enquiry_title' => $this->user['enquiry_title'],
        
                'email' => $this->user['email'],
                'first_name' => $this->user['first_name'],
                'property_name' => $this->user['property_name'],
                'last_name' => $this->user['last_name'],
                'date_from' => $this->user['date_from'],
                'date_to' => $this->user['date_to'],
                'message' => $this->user['message'],
            ]);
    }
}
