<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\UsersController;

class NavController extends Controller
{
    public function About(){
        return view('About');    
    }
    public function Help(){
        return view('Help');
    }  
    public function homepage(){
        return view('homepage');    
    }
}
