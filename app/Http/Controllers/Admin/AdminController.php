<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {

        return view("admin.index");
    }

    public function Login(Request $request)
    {


        $request->validate([

            'email' => 'required',
            'password' => 'required'
        ]);

        //set credentials

        $credetntials = $request->only('email', 'password'); //keys 

        if (Auth::attempt($credetntials)) {

            return redirect('/admin/dashboard');
        }

        return redirect('/admin/index')->with("error");

    }


    public function dashboard()
    {

        return view("admin.dashboard");
    }

//Displaying Product on Our Show-Product Page

// public function showProducts(){

//     $products = Product::all();
//     $galleries = Gallery::all();

//     return view("admin.products.index", compact("products","galleries"));
// }


}
