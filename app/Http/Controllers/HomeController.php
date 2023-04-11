<?php

namespace App\Http\Controllers;
use App\Models\Registro;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return redirect()->route('login.index');
    }

    public function home(){
        return view('home');
    }

    public function list(){
        $registros = Registro::where('user_id', '=',auth()->user()->id)->get();
        return view('lists', compact('registros'));
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
}
