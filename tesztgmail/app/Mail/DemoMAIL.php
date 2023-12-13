<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemoMAIL extends Mailable
{
    use Queueable, SerializesModels;


    public $mailData;
public function __construct($mailData)
   {
       	$this->mailData = $mailData;
   }

    /**
     * Create a new message instance.
   
    
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demo M A I L',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(

            //resources/views mappán belül
            //email nevű mappában a test.blade.php
            view: 'email.test',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
