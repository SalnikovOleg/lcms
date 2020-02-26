<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class QuestionMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$options)
    {
        $subject = isset($data['theme']) && $data['theme'] 
            ? $data['theme']
            : $options['subject_info'];

        $this->data = [
            'from' => $data['mail'],
            'from_name' => $data['name'], 
            'subject' => $subject,
            'message' => $data['message'],
            'phone' => $data['phone'],
            'referer' => $data['referer']
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->data['from'], $this->data['from_name'])
                    ->subject($this->data['subject'])
                    ->view('mail.message', ['data' => $this->data]);
    }

}
