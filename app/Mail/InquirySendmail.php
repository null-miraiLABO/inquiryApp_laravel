<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquirySendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $mail;
    private $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $data )
    {
        $this->mail = $data['mail'];
        $this->name = $data['name'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('example@gmail.com')
            ->subject('自動送信メール')
            ->view('inquiry.mail')
            ->with([
                'mail' => $this->mail,
                'name' => $this->name,
            ]);
    }
}
