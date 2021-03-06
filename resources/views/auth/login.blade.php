@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="text-center mt-5 mb-4">Login</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @include('partials.error', ['attr' =>'email'])
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">

                    @include('partials.error', ['attr' =>'password'])
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">Remember Me</label>

                        @if (Route::has('password.request'))
                            <span class="float-right">
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </span>
                        @endif
                    </div>
                    
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-normal btn-block">Login</button>
                </div>
            </form>

            <hr class="my-4">

            <a href="{{ route('redirect', 'facebook') }}" class="btn btn-facebook btn-block">Sign in with Facebook</a>
        </div>
    </div>
</div>
@endsection
