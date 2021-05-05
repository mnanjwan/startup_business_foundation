<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Support;

class SendSupportMail extends Mailable
{
    use Queueable, SerializesModels;

    public $support;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Support $support)
    {
        $this->support = $support;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Support Message')
            ->markdown('emails.send-support-mail');
    }
}
