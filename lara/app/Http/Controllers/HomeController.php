<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    public function redirect()
    {
        // Check if user is authenticated
        if (Auth::check()) {
            // Redirect based on user type
            if (Auth::user()->usertype == '0') {
                return $this->userHome();
            } else {
                return $this->adminHome();
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        return $this->userHome();
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $allProduct = Product::query();

        if (!empty($search)) {
            $allProduct->where('title', 'LIKE', '%' . $search . '%');
        }

        $allProduct = $allProduct->get();

        return view('user.home', compact('allProduct'));
    }

    private function userHome()
    {
        $allProduct = Product::all();
        return view('user.home', compact("allProduct"));
    }

    private function adminHome()
    {
        $productsCount = Product::count();
        $usersCount = User::count();
        return view('admin.home', compact('productsCount', 'usersCount'));
    }
}
