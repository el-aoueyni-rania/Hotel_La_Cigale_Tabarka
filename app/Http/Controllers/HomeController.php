<?php

namespace App\Http\Controllers;


use App\bienetre;


use Illuminate\Http\Request;
use Illuminate\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

        //$this->middleware('auth')->except('welcome');


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

    public function welcome()
    {

        return view('welcome');
    }
public function redirectTo(){

    if(auth::user()->admin){
        return '/admin-Dashboard';
    }
return '/home';
}

    public function bienetre()
    {
        $bienetres=bienetre::inRandomOrder()->limit(10)->get();
        return view('bienetre' ,['bienetres'=> $bienetres]);
        //return view('userRoles' , ['user_roles' => $userRoles]);
    }

}
