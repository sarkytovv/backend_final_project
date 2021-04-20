<?php

namespace App\Http\Controllers;

use App\Models\AccountsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AccountsController extends Controller
{
    public function index(){
        $accounts = AccountsModel::all();

        return view('auth')->with(['accounts'=>$accounts]);
    }
    public function store(Request $request){
        $accounts_models = new AccountsModel();
            $accounts_models->email=$request->email;
            $accounts_models->password=$request->password;
            $accounts_models->save();
        return redirect()->route('auth');
    }
}