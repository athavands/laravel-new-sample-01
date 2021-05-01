<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Models\Quaries;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $get = Quaries::where('status','=','pending')->get();
       $isAdmin = Auth::user()->is_admin;
        return view('home')->with(compact('isAdmin'))->with(compact('get'));
    }

   
}
