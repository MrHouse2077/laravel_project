<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Jobs\AuthMail;
use App\Jobs\ResetMail;
class UniMailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    private $file='mail.';
    private $param;
    public function __construct($file, $param)
    {
        $this->file = $this->file.$file;
        $this->param = $param;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $param = $this->param;
        return $this->view($this->file, compact('param'));
        
    }
}
