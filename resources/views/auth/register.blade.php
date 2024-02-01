@extends('layouts.app')
@section('content')
    <div class="card mb-3">

        <div class="card-body">

            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                <p class="text-center small">Enter your personal details to create account</p>
            </div>
            <form class="row g-3" method="POST" action="{{ route('register') }}" id="admin_login">

                @csrf
                <div class="col-12">
                    <label for="email" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" required>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" required>
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
                <div class="col-12">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="col-12">
                    <button class="btn btn-dark w-100" id="" type="submit">SignUp</button>
                </div>
                <div class="my-2">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link text-decoration-none" href="{{ route('login') }}">
                            {{ __('Already have an account?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
