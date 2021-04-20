<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientsModel;
use Illuminate\Support\Facades\App;

class ClientController extends Controller
{
    public function index(){
        $clients_models = ClientsModel::all();

        return view('auth');
    }
    public function store(Request $request){
        $clients_models = new ClientsModel();

            $clients_models->name=$request->name;
            $clients_models->surname=$request->surname;
            $clients_models->email=$request->email;
            $clients_models->password=$request->password;
            
            $clients_models->save();
        return redirect()->route('auth');
    }
}
