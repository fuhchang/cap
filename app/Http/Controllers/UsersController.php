<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UsersController extends Controller
{

    public function index(){
        return view('welcome');
    }
    public function signup(){
        return view('createuser');
    }
}
