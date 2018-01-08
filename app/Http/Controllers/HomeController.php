<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Reply;
use App\Project;
use App\NewProject;
use Auth;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $name = Auth::user()->name;
    $e = explode(' ', $name);
    $fName = $e[0];

    //Get
    $c = Contact::where('email', '=', Auth::user()->email)->orderBy('id', 'desc')->get();
    $nP = NewProject::where('email', '=', Auth::user()->email)->orderBy('id', 'desc')->get();

    //Check
    $npCount = NewProject::where('email', '=', Auth::user()->email)->count();
    $cCount = Contact::where('email', '=', Auth::user()->email)->count();

    return view('home', compact('fName', 'c', 'cCount', 'npCount', 'nP'));
  }
  
  public function view ($id) 
  {
    $c = Reply::where('idMsg', '=', $id)->get();
    return view('contact.view', compact('c'));
  }

  public function newProject(Request $request) 
  {
    $p = new NewProject;
    $p->message = $request->message;
    $p->number = $request->number;
    $p->theme = $request->theme;
    $p->status = 0;
    $p->name = Auth::user()->name;
    $p->email = Auth::user()->email;
    
    if ($request->email == 'on') {
      $p->type_response = 'Email';
    } else {
      $p->type_response = 'Telefone';
    }

    $p->save();
    
    session()->flash('msg', 'Seu projeto foi enviado com sucesso, aguarde a resposta.');
    return redirect()->back();
  }
}
