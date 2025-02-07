<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function index(){
        return view("welcome", [
            'products'=> Product::with(['category'])->paginate(5)
        ]);
    }
    /**
     * Display the welcome page
     *
     * @return \Illuminate\Http\Response
     */

    public function about(){
        return view("about");
    }
    public function product(){
        return view("page.web.products.index", [
            'products'=> Product::with(['category'])->paginate(5)
        ]);
    }

    public function cart(){
        return view('page.web.cart.index');
    }
}
