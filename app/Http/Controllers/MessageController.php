<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function all() {

        $messages = Message::all(); // J'appel le model Message qui appel la fonction all()
        dump($messages);

        return view('messages.messages');
    }

    public function show($messageID){
        dump($messageID);
        return view('messages.message');
    }
}
