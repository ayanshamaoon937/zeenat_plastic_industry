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
            <form class="row g-3" method="POST" action="{{ route('password.email') }}" id="">
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
                    <button class="btn btn-dark w-100" id="" type="submit">Send Password Reset Link</button>
                </div>

            </form>
        </div>
    </div>
@endsection
