<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Models\department;
use App\Models\role;
use App\Models\User;
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
        $users = User::all()->count();
        $roles = role::all()->count();
        $departments = department::all()->count();


        return view('pages.index',['users'=>$users , 'departments'=>$departments ,'roles'=>$roles ]);
    }
}
