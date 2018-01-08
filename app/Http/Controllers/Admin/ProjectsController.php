<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewProject;
use Auth;

class ProjectsController extends Controller
{
    public function home()
    {
        $this->authorize('admin', Auth::user()->category); // Usando a Gate do provider
        $name = Auth::user()->name;
        $e = explode(' ', $name);
        $fName = $e[0];

        $projects = (isset($_GET['status'])) ? NewProject::where('status', '=', $_GET['status'])->get() : NewProject::paginate();
        $countP = (isset($_GET['status'])) ? NewProject::where('status', '=', $_GET['status'])->count() : NewProject::count();
        return view('admin.projects.home', compact('fName', 'projects', 'countP'));
    }

    public function view($id)
    {
        $this->authorize('admin', Auth::user()->category); // Usando a Gate do provider
        $name = Auth::user()->name;
        $e = explode(' ', $name);
        $fName = $e[0];

        $project = NewProject::find($id);

        return view('admin.projects.view', compact('project'));
    }
}
