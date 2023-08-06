<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CustomerAskingMail extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    public $subject;
    public $sender;
    public $senderEmail;
    /**
     * Create a new message instance.
     * 
     * @param  string  $content
     * @param  string  $subject
     * @param  string  $sender
     * @return void
     */
    public function __construct($content, $subject, $sender, $senderEmail)
    {
        $this->content = $content;
        $this->subject = $subject;
        $this->sender = $sender;
        $this->senderEmail = $senderEmail;
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.customer-asking',
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
