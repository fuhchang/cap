<?php

namespace App\Http\Controllers;


use Request;
use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UsersController extends Controller
{

    public function index(){
        return view('welcome');
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
