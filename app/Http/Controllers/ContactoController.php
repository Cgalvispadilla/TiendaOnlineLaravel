<?php

namespace App\Http\Controllers;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    { 
        return view('contacto');   
    }

    public function store(Request $request)
    {   
    $this->validate($request, [
        'nombre'     =>  'required',
        'apellido'     =>  'required',
        'correo'  =>  'required|email',
        'tema'     =>  'required',
        'mensaje' =>  'required'
        ]);

    $correo = new ContactoMailable($request->all());
    Mail::to('correo@corre.admin.com')->send($correo);

    return back()->with('success', 'Enviado exitosamente!');

    }
}
