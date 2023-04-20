<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    // public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(public Contact $contact)
    {

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // from: new Address(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME')),
            from: new Address(env('MAIL_FROM_ADDRESS'), $this->contact->name),
            // from: new Address($this->contact->email, $this->contact->name),
            replyTo: [
                new Address('benkalsoft@gmail.com', 'Ben Kal'),
            ],
            subject: $this->contact->subject,   
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'admin.contact.sendmail',
            with: [
                'name'  => $this->contact->name,
                'email'  => $this->contact->email,
                'subject'  => $this->contact->subject,
                'message'  => $this->contact->message,
            ],
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
