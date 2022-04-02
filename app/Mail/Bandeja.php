<?php

namespace App\Mail;

use App\Models\Libro;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class Bandeja extends Mailable
{
    use Queueable, SerializesModels;

    public $libros;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->libros = Libro::all();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return //$this->from('FinderBook@mail.com', 'Notificacion')->
        $this->view('mails.emailNot', );
    }
}
