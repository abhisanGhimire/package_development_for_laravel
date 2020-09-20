<?php

namespace abhisanGhimire\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $name;
    public $sender_email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $name, $sender_email)
    {
        $this->message = $message;
        $this->name = $name;
        $this->sender_email = $sender_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with(['message' => $this->message, 'name' => $this->name, 'sender_email' => $this->sender_email]);
    }
}
