<?php

namespace App\Mail;

use App\Models\Submission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubmissionMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        public Submission $submission,
    ) {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = '[Portfolio] Contact from '.$this->submission->name;
        $to = 'contact@ewilan-riviere.com';
        $from = 'contact@ewilan-riviere.com';

        return $this->to($to)
            ->from($from)
            ->subject($subject)
            ->markdown('emails.submission')
            ->with([
                'name'       => $this->submission->name,
                'email'      => $this->submission->email,
                'message'    => $this->submission->message,
            ]);
    }
}
