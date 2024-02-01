@extends('admin.layouts.master')
@section('pageTitle', 'Settings')
@section('content')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row  mx-0">
                <div class="col-md-6">
                    <form class=" h-100 row g-3 bg-white shadow p-3 mb-2 rounded" id="update_website_details">
                        <h3 class="text-center">Update Website Details</h3>
                        <div class="col-md-12">
                            <label for="site_name" class="form-label">Enter Site Name</label>
                            <input type="text" required  class="form-control" value="<?=$settings['site_name']?>" id="site_name">
                        </div>
                        <div class="col-md-12">
                            <label for="logo" class="form-label">Select Logo</label>
                            <input type="file"  class="form-control" id="logo">
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Contact Email</label>
                            <input type="text" required  class="form-control" value="<?=$settings['email']?>"  id="email" >
                        </div>
                        <div class="col-12">
                            <label for="phone_number" class="form-label">Enter Phone Number</label>
                            <input type="text" required class="form-control" value="<?=$settings['phone_number']?>"  id="phone_number" >
                        </div>
                        <div class="col-12">
                            <label for="location" class="form-label">Enter Location</label>
                            <input type="text" required  class="form-control" value="<?=$settings['location']?>"  id="location" >
                        </div>
                        <div class="col-12">
                            <label for="timing" class="form-label">Enter Timings</label>
                            <input type="text" required class="form-control" value="<?=$settings['timing']?>"  id="timing" >
                        </div>

                        <div class="col-12 ">
                            <button type="submit" id="update_settings_btn1" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form class=" h-100  row g-3 bg-white shadow p-3 rounded" id="update_social_links">
                        <h3 class="text-center">Update Social Media Links</h3>
                        <div class="col-md-12">
                            <label for="twitter_link" class="form-label">Facebook Link</label>
                            <input type="text" required  class="form-control" value="<?=$settings['twitter_link']?>" id="facebook_link">
                        </div>
                        <div class="col-12">
                            <label for="twitter_link" class="form-label">Twitter Link</label>
                            <input type="text" required  class="form-control" value="<?=$settings['twitter_link']?>"  id="twitter_link" >
                        </div>
                        <div class="col-12">
                            <label for="linkedin_link" class="form-label">LinkedIn Link</label>
                            <input type="text" required class="form-control" value="<?=$settings['linkedin_link']?>"  id="linkedin_link" >
                        </div>
                        <div class="col-12">
                            <label for="youtube_link" class="form-label">YouTube Link</label>
                            <input type="text" required  class="form-control" value="<?=$settings['youtube_link']?>"  id="youtube_link" >
                        </div>


                        <div class="col-12">
                            <button type="submit" id="update_settings_btn2" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <form class=" h-100 row g-3 bg-white shadow p-3 mb-2 mt-2 rounded" id="update_images">
                        <h3 class="text-center">Update About US Images</h3>
                        <div class="col-md-12">
                            <label for="ceo_image" class="form-label">CEO Image</label>
                            <input type="file" required  class="form-control" id="ceo_image">
                        </div>
                        <div class="col-md-12">
                            <label for="about_image1" class="form-label">About Image1</label>
                            <input type="file" required class="form-control" id="about_image1">
                        </div>
                        <div class="col-md-12">
                            <label for="about_image2" class="form-label">About Image2</label>
                            <input type="file" required class="form-control" id="about_image2">
                        </div>
                        <div class="col-md-12">
                            <label for="about_image3" class="form-label">About Image3</label>
                            <input type="file" required class="form-control" id="about_image3">
                        </div>
                        <div class="col-12 ">
                            <button type="submit" id="update_settings_btn3" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
@section('script')

    <script>
        $(document).ready(function() {
            $("#settingsli").addClass("nav-active");

        });
    </script>
@endsection
