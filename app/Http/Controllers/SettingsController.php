<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{

    public function index(){
        try{

            $settings = settings::where('id',1)->first();

            return view('admin.pages.settings', compact('settings'));

        }   catch (\Throwable $th){

            dd("Something went wrong, please try again!");

        }
    }
    public function update_website_details(Request $request)
    {
        try {
            DB::beginTransaction();

            $settings=settings::where('id',1)->first();

            if ($request->hasFile('logo')) {
                $picture = $request->file('logo');
                $pictureName = time() . '_' . $picture->getClientOriginalName();
                $picture->move(public_path('uploads/logo/'), $pictureName);

                $pictureName='uploads/logo/'.$pictureName;
                $settings->logo =$pictureName;
            }

            $settings->site_name = $request->site_name;
            $settings->timing = $request->timing;
            $settings->email = $request->email;
            $settings->phone_number = $request->phone_number;
            $settings->location = $request->location;

            if(!$settings->save()){
                return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Failed to update settings']);
            }
            DB::commit();
            return response()->json(['status' => 'true','icon'=>'success', 'message' => 'Settings updated successfully']);

        } catch (\Throwable $th) {

            DB::rollback();
            return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Exception to update settings']);
//            return response()->json(['status' => 'false','icon'=>'error', 'message' => $th->getMessage()]);

        }
    }
    public function update_about_images(Request $request)
    {
        try {
            DB::beginTransaction();

            $settings=settings::where('id',1)->first();

            if ($request->hasFile('ceo_image')) {
                $picture = $request->file('ceo_image');
                $pictureName = time() . '_' . $picture->getClientOriginalName();
                $picture->move(public_path('uploads/'), $pictureName);

                $pictureName='uploads/'.$pictureName;
                $settings->ceo_image =$pictureName;
            }
            if ($request->hasFile('about_image1')) {
                $picture = $request->file('about_image1');
                $pictureName = time() . '_' . $picture->getClientOriginalName();
                $picture->move(public_path('uploads/'), $pictureName);

                $pictureName='uploads/'.$pictureName;
                $settings->about_image1 =$pictureName;
            }
            if ($request->hasFile('about_image2')) {
                $picture = $request->file('about_image2');
                $pictureName = time() . '_' . $picture->getClientOriginalName();
                $picture->move(public_path('uploads/'), $pictureName);

                $pictureName='uploads/'.$pictureName;
                $settings->about_image2 =$pictureName;
            }
            if ($request->hasFile('about_image3')) {
                $picture = $request->file('about_image3');
                $pictureName = time() . '_' . $picture->getClientOriginalName();
                $picture->move(public_path('uploads/'), $pictureName);

                $pictureName='uploads/'.$pictureName;
                $settings->about_image3 =$pictureName;
            }

            if(!$settings->save()){
                return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Failed to update settings']);
            }
            DB::commit();
            return response()->json(['status' => 'true','icon'=>'success', 'message' => 'Settings updated successfully']);

        } catch (\Throwable $th) {

            DB::rollback();
            return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Exception to update settings']);
//            return response()->json(['status' => 'false','icon'=>'error', 'message' => $th->getMessage()]);

        }
    }
    public function update_social_links(Request $request)
    {
        try {
            DB::beginTransaction();

            $settings=settings::where('id',1)->first();

            $settings->facebook_link = $request->facebook_link;
            $settings->twitter_link = $request->twitter_link;
            $settings->youtube_link = $request->youtube_link;
            $settings->linkedin_link = $request->linkedin_link;


            if(!$settings->save()){
                return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Failed to update links']);
            }
            DB::commit();
            return response()->json(['status' => 'true','icon'=>'success', 'message' => 'Links updated successfully']);

        } catch (\Throwable $th) {

            DB::rollback();
            return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Exception to update links']);
//            return response()->json(['status' => 'false','icon'=>'error', 'message' => $th->getMessage()]);

        }
    }

    public function update_product_images(Request $request)
    {
        try {
            DB::beginTransaction();

            $rules = [
                'files.*' => ['nullable', 'mimes:jpeg,bmp,png,gif,svg,'],
            ];

            $customMessages = [];
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $index => $file) {
                    $customMessages["files.$index.mimes"] = "File item $index must be one of the allowed file types (jpeg, bmp, png, gif, svg, txt, csv, pdf, doc, docx).";
                }
            }

            $validator = Validator::make($request->all(), $rules, $customMessages);

            if ($validator->fails()) {
                $errors = $validator->errors()->first();
                return response()->json(['status' => 'false','icon'=>'error', 'message' => $errors]);
            }

            //upload files
            if ($request->hasFile('files') ) {
                $files = $request->file('files');
                foreach ($files as $key => $file) {
                    $pictureName = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('uploads/products/'), $pictureName);
                    $pictureName = 'uploads/products/' . $pictureName;

                    Products::create([
                        'image_path' => $pictureName,
                    ]);
                }
            }
            DB::commit();
            return response()->json(['status' => 'true','icon'=>'success', 'message' => 'Product added successfully']);

        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Exception to add Product']);
        }
    }
    public function products()
    {
        try {


            $products= Products::all();

            return view('admin.pages.add_product',compact('products'));

        } catch (\Throwable $th) {

            dd("Some thing went wrong");

        }
    }

    public function delete_product_image(Request $request)
    {
        try {
            $id=$request->id;
            DB::beginTransaction();
            $user = Products::findorfail($id);

            if($request->type==0){
                $user_type='Image';
                if(!$user->delete()){
                    return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Failed to delete '.$user_type]);
                }
                DB::commit();
                return response()->json(['status' => 'true','icon'=>'success', 'message' => $user_type.' deleted successfully']);


            }else if($request->type==1){
                $user_type='Images';
               Products::truncate();
                DB::commit();
                return response()->json(['status' => 'true','icon'=>'success', 'message' => $user_type.' deleted successfully']);

            }

        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['status' => 'false','icon'=>'error', 'message' => 'Exception to delete '.$user_type]);
        }
    }
}
