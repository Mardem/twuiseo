<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestTimeController extends Controller
{
    public function index()
    {
        return view('');
    }

    public function update(Request $request)
    {
        return $request->all();
    }
}
