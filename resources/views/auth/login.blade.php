@extends('layouts.app')
@section('content')
    <div class="card mb-3">

        <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                <p class="text-center small">Enter your email & password to login</p>

            </div>
            <form class="row g-3" method="POST" action="{{ route('login') }}" id="admin_login">
                @csrf
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                @error('error1')
                <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="col-12">
                    <button class="btn btn-dark w-100" id="" type="submit">Login</button>
                </div>
                <div class="my-2 row d-flex justify-content-between">
                    <div class="">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-decoration-none" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <div>
                        <a class="btn btn-link text-decoration-none d-none" href="{{ route('register') }}">
                            {{ __('Not have an account?') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
