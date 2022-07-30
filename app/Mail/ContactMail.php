<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        $subject='TenMaTo Email Design Request';
        if(isset($this->details['contact_us'])){
            
             $subject='Client Contact You';
        }
        
        if(isset($this->details['document'])){
            
            return $this->subject($subject)
            ->attach($this->details['document']->getRealPath(),
                [
                    'as' => $this->details['document']->getClientOriginalName(),
                    'mime' => $this->details['document']->getClientMimeType(),
                ])
            ->view('emails.design_request');
        }else{
            
            return $this->subject($subject)
            ->view('emails.design_request');
        }
        
    }
}
