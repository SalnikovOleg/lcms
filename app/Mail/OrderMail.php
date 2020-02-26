<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$options)
    {
        $this->data = [
            'from' => $data['mail'],
            'from_name' => $data['name'], 
            'subject' =>  $options['subject_order'];
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
                    ->view('mail.message',['data'=>$this->data]);
    }
   
}
