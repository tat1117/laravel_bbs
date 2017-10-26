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

      public function create(){
        return view('messages.create');
    }

      public function store() {
          $inputs = \Request::all();
          Message::create($inputs);
          return redirect('messages');
        }
}
