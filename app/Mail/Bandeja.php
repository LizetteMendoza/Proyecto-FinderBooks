<?php

namespace App\Mail;

use App\Models\Libro;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class Bandeja extends Mailable
{
    use Queueable, SerializesModels;

    public $contacto = "este es el mensaje";
    public $libros;
    public $usuario;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->libros = Libro::all();
        $this->usuario = Auth::user();
        //$this->libroU = Auth::user()->get('email');

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
