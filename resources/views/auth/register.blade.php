@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="text-center">Register</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <input id="name" type="text"  name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        placeholder="Full name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="email" type="email" name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email"
                        value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <small class="ml-1"><em>(6 characters minimum)</em></small>
                    <input id="password" type="password" name="password"
                        class="mt-1 form-control @error('password') is-invalid @enderror"
                        placeholder="Password"
                        required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password-confirm" type="password" name="password_confirmation"
                        class="form-control"
                        placeholder="Confirm password"
                        srequired autocomplete="new-password">
                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
            </form>

            <hr>

            <a href="{{ route('redirect', 'facebook') }}" class="btn btn-primary btn-block">Sign in with Facebook</a>
        </div>
    </div>
</div>
@endsection
