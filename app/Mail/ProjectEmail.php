<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProjectEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The demo object instance.
     *
     * @var Demo
     */
    public $demo;
    public $subtitulo;
    public $picture;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($demo, $subtitulo, $picture)
    {
        $this->demo = $demo;
        $this->subtitulo = $subtitulo;
        $this->picture = $picture;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@novativex.com')
            ->view('mails.demo');
    }
}

