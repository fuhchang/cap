<?php

namespace App\Http\Controllers;


use Request;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UsersController extends Controller
{
    //function that is call after login and return user detail of the user login.
    public function index(){
        return \Auth::user();
        //return view('welcome');
    }
    public function getsignupform(){
        return view('createuser');
    }

    public function createuser(){
        $input = Request::all();
        User::create($input);
        return redirect('welcome');
    }
}
