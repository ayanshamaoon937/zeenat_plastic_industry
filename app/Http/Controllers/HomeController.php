<?php

namespace App\Http\Controllers;

use App\Models\box;
use App\Models\order;
use App\Models\package;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public function index(Request $request)
    {
        return view('admin.pages.index');
    }
    public function products()
    {
        try {
            $products = Products::all();
            return view('user.pages.products', compact('products'));
        }
        catch (\Exception $e){
            dd($e->getMessage());
        }

    }
}
