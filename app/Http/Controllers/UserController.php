<?php

namespace App\Http\Controllers;

use App\Models\dynamicform;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function update_profile(Request $request)
    {
        try {
            $pictureName = '';
            if ($request->hasFile('picture')) {
                $picture = $request->file('picture');
                $pictureName = time() . '_' . $picture->getClientOriginalName();
                $picture->move(public_path('uploads/profile/'), $pictureName);

                $pictureName='uploads/profile/'.$pictureName;
            }

            $id=Auth::user()->id;
            DB::beginTransaction();
            $user = User::findorfail($id);
            $user->name=$request->name;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->image_path=$pictureName;

            if(!$user->update()){
                return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Failed to upload image']);
            }
            DB::commit();
            return response()->json(['status' => 'true','icon'=>'success', 'message' => 'Image uploaded successfully']);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Exception to update image']);
        }
    }
    public function update_password(Request $req){
        try {

            $user = User::where('id', Auth::user()->id)->first();

            $hashedPassword = User::where('id', Auth::user()->id)->value('password');

            // Check if the plain password matches the hashed password
            if (Hash::check($req->old_password, $hashedPassword)) {
                $user->password = Hash::make($req->new_password);
                $user->update();

                return response()->json(['status' => 'true','icon'=>'success', 'message' => 'Password updated updated successfully']);

            }else{
                return response()->json(['status' => 'true','icon'=>'error', 'message' => 'Your old password is not matched']);
            }

        } catch (\Throwable $th) {

            return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Exception to update password']);
        }

    }
}
