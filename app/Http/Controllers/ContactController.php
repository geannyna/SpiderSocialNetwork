<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;



class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        //llamamos a la clase Mailable(ContactNotification.php)

       // aqui envia el correo

        Mail::to('claudia.iacob@hotmail.com')->send (
            new ContactNotification(
                $request->input('email'), 
                $request->input('name'),
                $request->input('description'),
        ));
        
        return back()
        ->with('code','200')
        ->with ('message','Correo enviado correctamente.');

        // esto hace que no aparezca la ventanita donde dice reenviar

      // return view('contact',['code'=> '200','message'=>'Correo enviado correctamente.']);

        // return 'Formulario procesado ' . $request->name;
        //  $request->input ('name') - se puede poner asi tambien pero tarda mas, esto no sirve porque va a una nueva pagina y deberia de estar en la misma pagina y enseñar el mensaje de envio
    }
}