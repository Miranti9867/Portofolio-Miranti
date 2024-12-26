<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller {
    public function store(Request $request){
        //Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        //Simpan data ke database
        $message = new Message();
        $message->name = $request['name'];
        $message->email = $request['email'];
        $message->message = $request['message'];
        $message->save();

        return back();
    }
}

