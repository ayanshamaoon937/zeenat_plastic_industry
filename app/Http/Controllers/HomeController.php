<?php

namespace App\Http\Controllers;

use App\Models\box;
use App\Models\order;
use App\Models\package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    public function index(Request $request)
    {
        return view('admin.pages.index');
    }
}
