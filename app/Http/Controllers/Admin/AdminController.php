<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Auth;

class AdminController extends Controller
{
  public function index()
  {
    $this->authorize('admin', Auth::user()->category); // Usando a Gate do provider
    $name = Auth::user()->name;
    $e = explode(' ', $name);
    $fName = $e[0];

    $cCount = Contact::count();
    $contacts = Contact::orderBy('id', 'desc')->paginate();
    return view('admin.home', compact('fName', 'cCount', 'contacts'));
  }

  public function contact()
  {
    $this->authorize('admin', Auth::user()->category); // Usando a Gate do provider
    $name = Auth::user()->name;
    $e = explode(' ', $name);
    $fName = $e[0];

    $contacts = Contact::orderBy('id', 'desc')->paginate();
    $cCount = Contact::count();
    return view('admin.contact', compact('fName','cCount', 'contacts'));
  }
}
