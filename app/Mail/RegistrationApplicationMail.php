<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $linkRegistrated;
    public $senderName;
    public $senderAddress;
    public $subject;

    public function __construct($linkRegistrated, $senderName, $senderAddress)
    {
        $this->linkRegistrated = $linkRegistrated;
        $this->senderName = $senderName;
        $this->senderAddress = $senderAddress;
        $this->subject = 'Notifikasi Registrasi Pendaftar';
    }


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.registration-application',
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
