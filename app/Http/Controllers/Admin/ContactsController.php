<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Reply;
use Auth;

class ContactsController extends Controller
{
    public function view ($id) {
      $this->authorize('admin', Auth::user()->category); // Usando a Gate do provider
      $name = Auth::user()->name;
      $e = explode(' ', $name);
      $fName = $e[0];

      $message = Contact::find($id);
      $message->read = 1;
      $message->save();
      return view('admin.contact.view', compact('fName', 'message'));
    }

    public function  delete ($id) {
      $c = Contact::find($id);
      $c->delete();

      session()->flash('msg', 'Contato apagado com sucesso!');
      return redirect()->route('admin.dash');
    }

    public function response (Request $request) {
      $r = new Reply;
      $r->response = $request->response;
      $r->email = $request->email;
      $r->idMsg = $request->idMsg;
      $r->msgOld = $request->oldMessage;
      $r->from = 'Administração';
      $r->save();

      $c = Contact::find($request->idMsg);
      $c->responsered = 1;
      $c->save();

      session()->flash('msg', 'Resposta enviada com sucesso!');
      return redirect()->route('admin.dash');
    }
}
