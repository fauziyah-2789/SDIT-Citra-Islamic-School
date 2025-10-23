<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Kontak;

class KontakMasukMail extends Mailable
{
    use Queueable, SerializesModels;

    public $kontak;

    /**
     * Create a new message instance.
     */
    public function __construct(Kontak $kontak)
    {
        $this->kontak = $kontak;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Pesan Kontak Baru dari Website Sekolah Citra')
                    ->view('emails.kontak-masuk');
    }
}
