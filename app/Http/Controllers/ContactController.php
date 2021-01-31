<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public function show(){

        $messages = Contact::all();
        return view('admin.dashboard.message',compact('messages'));

    }
    public function add( Request $request){


        $request->validate([
            'name' => ['required','string'],
            'email' => ['required','string'],
            'message' => ['required','string'],
            'phone' => 'required'
        ]);


         Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
            'phone' => $request->input('phone')
        ]);

        Session::flash('message','¡Mensaje Enviado con Éxito, pronto tendrás una Respuesta!');
        return redirect('contacto');
    }


    public function destroy( $id ){

        $contact = Contact::find($id);
        $contact->delete();
        return redirect('dashboard/mensajes')->with('destroy','Mensaje Eliminado');
    }

}
