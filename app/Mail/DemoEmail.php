<?php

namespace App\Mail;

use App\Http\Controllers\MessagesController;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\MessagesModel;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $messages_models;

    // /
    //  * Create a new message instance.
    //  *
    //  * @return void
    //  */
    public function __construct(MessagesModel $messages_models)
    {
        $this->messages_models = $messages_models;
    }

    // /
    //  * Build the message.
    //  *
    //  * @return $this
    //  */
    public function build()
    {
        return $this->subject('Добрейший вечерочек '. $this->messages_models->name)->view('emails.TestMail');
    }
    
}