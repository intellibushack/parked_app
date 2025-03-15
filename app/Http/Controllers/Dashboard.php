<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Parishes;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $parishes = Parishes::all();
        return view('dashboard',compact('parishes'));
    }
}
