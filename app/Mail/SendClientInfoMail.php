<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class SendClientInfoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public string $name, public string $phone, public string $email, public string $type)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('infosibcomfort@gmail.com', 'Данные клиента (' . $this->getBidType() . ')'),
            subject: 'сибкомфорт.рф',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.client_info',
            with: [
                'name' => $this->name,
                'phone' => $this->phone,
                'email' => $this->email,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            // Attachment::fromPath(public_path('Презентация_проектов_ПСК_СибКомфорт.pdf')),
        ];
    }

    private function getBidType() {
        if ($this->type === 'karkas') return 'Каркас';
        else if ($this->type === 'brus') return 'Брус';
        else if ($this->type === 'module') return 'Модули';
        else if ($this->type === 'ruchnaya-rubka') return 'Ручная рубка';
        return 'Каталог';
    }
}
