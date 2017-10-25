<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller {

    public function index() {
        $messages = Message::all();

        return view('messages.index', compact('messages'));
    }

    public function show($id) {
        return $id;
    }
}
