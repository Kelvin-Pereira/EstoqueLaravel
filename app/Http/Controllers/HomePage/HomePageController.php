<?php

namespace App\Http\Controllers\HomePage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
// manda para tela inicial
    public function index(){
        return view('home');
    }
}
