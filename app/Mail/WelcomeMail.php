<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\candidate;
  
class MailNotify extends Mailable
{
    use Queueable, SerializesModels;
  
    public $data=[];
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->data= $data;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $data = candidate::all();
        return $this->from('vamshipatel99@gmail.com')
                    ->to('vamshi123@gmail.com')
                    ->subject('Here is the mail')
                    // ->attachFromStorage('Pictures/download1.jpg')
                    ->view('emails.welcome');
          
           
    }
}