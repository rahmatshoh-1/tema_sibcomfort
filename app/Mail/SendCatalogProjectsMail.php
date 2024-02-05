<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class SendCatalogProjectsMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public string $name, public string $type)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('infosibcomfort@gmail.com', $this->getSubject()),
            subject: 'сибкомфорт.рф',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.client',
            with: [
                'name' => $this->name,
                'url'  => URL::to($this->getFileUrl()),
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

    private function getSubject() {
        if ($this->type === 'karkas') return 'Каталог каркас';
        else if ($this->type === 'brus') return 'Каталог брус';
        else if ($this->type === 'module') return 'Каталог модули';
        else if ($this->type === 'ruchnaya-rubka') return 'Каталог ручная рубка';
        return 'Каталог проектов';
    }

    private function getFileUrl() {
        $contact = Contact::first();
        if ($this->type === 'karkas') return $contact['data']['files'][0]['file'];
        else if ($this->type === 'brus') return $contact['data']['files'][1]['file'];
        else if ($this->type === 'module') return $contact['data']['files'][2]['file'];
        else if ($this->type === 'ruchnaya-rubka') return $contact['data']['files'][3]['file'];
        return $contact['data']['files'][4]['file'];
    }
}
