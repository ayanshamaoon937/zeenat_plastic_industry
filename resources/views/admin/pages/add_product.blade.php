@extends('admin.layouts.master')
@section('pageTitle', 'Add New Products')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Add New Products</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="row mx-0 pt-4">
                <div class="col-md-12">
                    <form class="row g-3 bg-white shadow p-3 rounded" id="package_submit">
                        <h3 class="text-center">Upload Product Images</h3>
                        <div class="modal-body">
                            <label class="form-label fw-bold">Select from your Computer</label>
                            <div class="upload__box ">
                                <div class="upload__btn-box">
                                    <label class="custom__btn rounded btn p-2">
                                        <p  class="mb-0" style="font-weight: normal">
                                            <i class="fa fa-plus"></i>
                                            Add Images
                                        </p>
                                        <input type="file" id="ad_image" multiple data-max_length="20" class="product_image upload__inputfile">
                                    </label>
                                </div>

                                <div class="upload__img-wrap mt-3 ms-1"></div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </section>
        <section class="section dashboard">
            <section class="section dashboard">
                <div class="row">
                    <div class="bg-white p-3 mb-3 mb-2">
                        <div class="fw-bold h4 pt-4 mb-3 text-center">Available Accounts</div>
                        <button class="btn btn-danger my-2" title="Delete All Available Accounts" onclick="deleteImage(`{{$ad_id}}`,1)">Delete All</button>
                        <div class="table-responsive">
                            <table class="table table-striped nowrap" id="myorderTable-select" style="min-height: 300px; width:100%">
                                <thead>
                                <tr>
                                    <th>ID#</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                foreach ($products as $product) {

                                    ?>
                                <tr>

                                    <td><?=$product['id']?></td>
                                    <td>
                                        <img style="height: 30px; width: 30px" src="{{asset($product->image_path ?? '')}}">
                                    </td>
                                    <td>
                                        <a onclick="deleteImage(`<?= $product['id'] ?>`,0);" id="delete_user{{$product['id']}}" class=" m-1 btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </main>

@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#productsli").addClass("nav-active");
        });
    </script>

@endsection
