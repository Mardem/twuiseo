<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use App\NewProject;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        $this->authorize('admin', Auth::user()->category);
        $name = Auth::user()->name;
        $e = explode(' ', $name);
        $fName = $e[0];

        $cCount = Contact::count();
        $contacts = Contact::orderBy('id', 'desc')->paginate();
        $nPCount = NewProject::count();
        $nprojects = NewProject::orderBy('id', 'desc')->paginate();

        return view('admin.home', compact('fName', 'cCount', 'contacts', 'nPCount', 'nprojects'));
    }

    public function contact()
    {
        $this->authorize('admin', Auth::user()->category);
        $name = Auth::user()->name;
        $e = explode(' ', $name);
        $fName = $e[0];

        $contacts = Contact::orderBy('id', 'desc')->paginate();
        $cCount = Contact::count();
        return view('admin.contact', compact('fName', 'cCount', 'contacts'));
    }
}
