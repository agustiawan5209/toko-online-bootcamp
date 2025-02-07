<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard',[
            'totalProducts'=> Product::count(),
            'totalCategories'=>Category::count(),
            'totalTransactions'=> Product::sum('price')
        ]);
    }
}
