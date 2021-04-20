<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use App\Models\MessagesModel;


class MailController extends Controller
{
    public function sendEmail($id){
        $accounts = MessagesModel::findOrFail($id);

        Mail::to($accounts->email)->send(new DemoEmail($accounts));
        return "Email send | Письмо отправлено";
    }
}