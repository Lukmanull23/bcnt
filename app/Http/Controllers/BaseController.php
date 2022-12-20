<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home(){
        return view('user.home');
    }

    public function treatment(){
        return view('user.treatment');
    }

    public function training(){
        return view('user.training');
    }

    public function history(){
        return view('user.history');
    }

    public function chart(){
        return view('user.chart');
    }

    public function login(){
        return view('user.login');
    }

    public function payment(){
        return view('user.payment');
    }




}
