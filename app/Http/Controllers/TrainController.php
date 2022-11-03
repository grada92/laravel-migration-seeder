<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\_train;

class Traincontroller extends Controller
{
    public function index(){
         $trains= _train::Where  ('Data_partenza', '=', '2022-11-08')->get();
        return view('welcome', compact('trains'));
    }
}
