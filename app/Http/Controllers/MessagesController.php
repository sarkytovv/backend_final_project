<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessagesModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\App;

class MessagesController extends Controller
{
    public function index(){
        $accounts = MessagesModel::all();

        return view('contacts')->with(['accounts'=>$accounts]);
        
    }
    public function store(Request $request){
        $messages_models = new MessagesModel();

            $messages_models->message=$request->message;
            $messages_models->name=$request->name;
            $messages_models->email=$request->email;
            $messages_models->subject=$request->subject;
            $messages_models->image=$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images/', $messages_models->image);
            $messages_models->save();
        Mail::to($request->email)->send(new DemoEmail($messages_models));
        return redirect()->route('contacts');
    }
}   
