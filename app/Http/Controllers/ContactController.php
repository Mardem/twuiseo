<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Auth;

class ContactController extends Controller
{
  public function back(Request $request)
  {
    $c = new Contact;
    $c->name = Auth::user()->name;
    $c->email = Auth::user()->email;
    $c->message = $request->message;
    $c->read = 0;
    $c->type = 1;

    $c->save();
    session()->flash('msg', 'Mensagem recebida com sucesso! Aguarde que logo responderemos.');
    return redirect()->back();
  }

  public function front(Request $request)
  {
    $c = new Contact;
    $c->name = $request->name;
    $c->email = $request->email;
    $c->message = $request->message;
    $c->read = 0;
    $c->type = 0;

    $c->save();

    session()->flash('msg', 'Mensagem recebida com sucesso! Aguarde que logo responderemos.');
    return redirect()->back();
  }
}
