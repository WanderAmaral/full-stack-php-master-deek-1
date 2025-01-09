<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\ContactMessage;
use App\Models\Home;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $home = Home::where('id', 1)->first();

        // dd($home);

        return view('site.home', ['home' => $home]);
    }

    public function about()
    {
        $about = About::where('id', 1)->first();

        return view('site.about', ['about' => $about]);
    }

    public function contact()
    {
        $contact = Contact::where('id', 1)->first();

        return view('site.contact', ['contact' => $contact]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required|max:255',
        ],[
            'name.required' => 'O campo nome é obrigatório',
            'name.max' => 'O campo nome deve ter no máximo 255 caracteres',

            'email.required' => 'O campo e-mail é obrigatório',
            'email.max' => 'O campo e-mail deve ter no máximo 255 caracteres',

            'subject.required' => 'O campo assunto é obrigatório',
            'subject.max' => 'O campo assunto deve ter no máximo 255 caracteres',
            
            'message.required' => 'O campo o mensagem é obrigatório',
            'message.max' => 'O campo mensagem deve ter no máximo 255 caracteres',
        ]); 

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}
