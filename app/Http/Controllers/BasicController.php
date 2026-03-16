<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Message;

class BasicController extends Controller
{
    public function index()
    {
        return view ('static.home');
    }
        public function about()
    {
        return view ('static.about');
    }
        public function contact()
    {
        return view ('static.contact');
    }
        public function submit(ContactRequest $request)
    {   
        $table = new Message();
        $table->name = $request->input('name');
        $table->email = $request->input('email');
        $table->subject = $request->input('subject');
        $table->message = $request->input('message');
        $table->save();
return redirect()->route('contact')->with('success', 'Сообщение успешно отправлено в базу!');
    }
}   

