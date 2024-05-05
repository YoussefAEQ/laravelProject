<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $productsCount = Product::count();
        $usersCount = User::count();
        dd($productsCount );
        return view('admin.home', compact('productsCount', 'usersCount'));
    }
}
