<?php

namespace App\Http\Controllers;


use App\bienetre;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
   {
       return view('home');
    }

    public function gallerie()
    {
        return view('utilisateur.gallerie');
     }

    public function welcome()
    {
        return view('welcome');
    }

public function redirectTo(){

    if(auth::user()->admin){
        return '/admin-dashboard';
    }
return '/home';
}

   


}
