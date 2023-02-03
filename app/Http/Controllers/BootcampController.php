<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function index()
    {
        $bootcamps = Bootcamp::all();
        return view('home', compact(['bootcamps']));
    }
}
