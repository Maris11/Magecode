<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create() {
        return view('sign_up');
    }
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email:rfc,strict|max:320|unique:clients'
        ]);
        $client = new Client();
        $client['name']=$request->name;
        $client['email']=$request->email;
        $client->save();
        return view('success');
    }
}
