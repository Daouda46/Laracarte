<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\Message;

class ContactMessage extends Mailable 
{
    // use Queueable, SerializesModels;

    public $msge;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $msge)
    {
       
       $this->msge = $msge;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->msge->email, $this->msge->name)
            ->markdown('emails/messages/created');
    }
}
