<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RestTime;
use Auth;

class RestTimeController extends Controller
{
    public function index()
    {
        $name = Auth::user()->name;
        $e = explode(' ', $name);
        $fName = $e[0];

        $cRt = RestTime::count();
        $rT = RestTime::get();
        return view('admin.resttime.home', compact('fName', 'cRt', 'rT'));
    }

    public function update($opt, $id)
    {
        $data = RestTime::find($id);

        if ($opt == 0) {
            $data->restTime = $data->restTime - 1;
        } else {
            $data->restTime = $data->restTime + 1;
        }

        ($data->restTime <= $data->contrated) ? $data->save() : session()->flash('msgError', 'Limite atingido');

        return redirect()->back();
    }
}
