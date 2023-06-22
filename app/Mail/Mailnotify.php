<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\candidate;
use App\Models\User;
  
class MailNotify extends Mailable
{
    use Queueable, SerializesModels;
  
    public $data;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data= $data;
        // dd($a);
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Here is the mail')
                    //  ->from('')
                    // ->attachFromStorage('Pictures/download1.jpg')
                    ->view('emails.welcome',['data'=>$this->data]);
          
           
    }
}