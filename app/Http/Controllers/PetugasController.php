<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function adminHome(){
        return view('dashboard');
    }
}
