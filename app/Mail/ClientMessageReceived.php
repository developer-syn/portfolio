<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class ClientMessageReceived extends Mailable
{
    public function __construct(public Message $clientMessage)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New website inquiry: ' . $this->clientMessage->subject,
            replyTo: [$this->clientMessage->email],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.client-message-received',
        );
    }
}
