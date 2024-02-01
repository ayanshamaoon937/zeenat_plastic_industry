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
                <h5 class="card-title text-center pb-0 fs-4">Reset Password</h5>
            </div>
            <form class="row g-3" method="POST" action="{{ route('password.update') }}" id="">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $email ?? old('email') }}" class="form-control  @error('email') is-invalid @enderror" id="email" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
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
                    <label for="password" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="col-12">
                    <button class="btn btn-dark w-100" id="" type="submit">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
@endsection
