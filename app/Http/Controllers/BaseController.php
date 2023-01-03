<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class BaseController extends Controller
{
    public function home(){
        return view('user.home');
    }

    public function treatment()
    {
        return view('user.treatment');
    }

    public function index()
    {
        $products = Product::paginate(20);
        return view('user.training', compact('products'));
    }

    public function history(){
        return view('user.history');
    }

   
    public function login(){
        return view('user.login');
    }

    public function payment(){
        return view('user.payment');
    }

    


    

}
