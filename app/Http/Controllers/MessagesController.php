<?php
namespace App\Http\Controllers;
use App\Message;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
    public function store(Request $request) {
           $rules = [
               'title' => 'required|min:3',
               'body' => 'required',
               'created_at' => 'required|date',
           ];
           $this->validate($request, $rules);

           Message::create($request->all());

           return redirect('messages');
       }
   }
   ?>
