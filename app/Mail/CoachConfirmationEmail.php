<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CoachConfirmationEmail extends Mailable

{
    use Queueable, SerializesModels;

    public $coach;
    public  $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Coach $coach, ActivationToken $token)
    {
        $this->coach = $coach;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.coachconfirmation');
    }
}
