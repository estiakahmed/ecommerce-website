<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function productDetails(){
        return view('home.product-details');
    }
    public function productView(){
        return view('home.view-product');
    }
    public function checkOut(){
        return view('home.checkout');
    }
    public function productShop(){
        return view('home.shop');
    }
    public function returnProcess(){
        return view('home.return-process');
    }
    public function privacyPolicy(){
        return view('home.privacy-policy');
    }
  
}
