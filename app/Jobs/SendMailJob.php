<?php

namespace App\Jobs;

use App\Mail\SendCatalogProjectsMail;
use App\Mail\SendClientInfoMail;
use App\Mail\SendConfirmCodeMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct(public string $name, public string $phone, public string $email, public string $type)
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::to('infosibcomfort@gmail.com')->send(new SendClientInfoMail($this->name, $this->phone, $this->email, $this->type));
        Mail::to($this->email)->send(new SendCatalogProjectsMail($this->name, $this->type));
    }
}
