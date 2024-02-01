<?php

namespace App\Http\Controllers;

use App\Models\box;
use App\Models\order;
use App\Models\package;
use App\Models\Products;
use App\Models\settings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        public function contact_submit(Request $request){
        try {
            $settings=settings::where('id',1)->first();
            $recipientEmail = $settings->email;
            $subject = $request->subject;
            $message = "Hello,\n".$request->message. " .\n\nRegards,\n".$request->name."\n".$request->email."\n Thank you";

            Mail::raw($message, function ($message) use ($recipientEmail, $subject) {
                $message->to($recipientEmail)
                    ->subject($subject);
            });
          return back();
        }catch (\Exception $th){
           dd ($th->getMessage());
        }

    }
}
