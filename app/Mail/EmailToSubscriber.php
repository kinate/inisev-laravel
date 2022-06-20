<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use phpDocumentor\Reflection\Types\This;

class EmailToSubscriber extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $post_title;
    public $post_content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($post_title,$post_content)
    {
        $this->post_title=$post_title;
        $this->post_content=$post_content;
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        return $this->markdown('emails.EmailToSubscriber');
    }
}
