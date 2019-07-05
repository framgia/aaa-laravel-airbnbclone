@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="text-center">Reset Passwords</h2>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <input id="email" type="email" name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        placeholder="Email address"
                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-0">
                    <div>
                        <button type="submit" class="btn btn-primary btn-block">
                            Send Password Reset Links
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
