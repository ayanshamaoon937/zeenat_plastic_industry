@extends('layouts.app')

@section('content')
    <div class="card mb-3">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4">Confirm Password</h5>
                <p class="text-center small">Please confirm your password before continuing</p>

            </div>
            <form class="row g-3" method="POST" action="{{ route('password.confirm') }}" id="">
                @csrf
                <div class="col-12">
                    <label for="email" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="password" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-12">
                    <button class="btn btn-dark w-100" id="" type="submit">Confirm Password</button>
                </div>
                <div class="col-12">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

            </form>
        </div>
    </div>

@endsection
