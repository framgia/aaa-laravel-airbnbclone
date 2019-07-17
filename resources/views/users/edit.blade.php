@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-unstyled sidebar">
                <li>
                    <a href="{{ route('user.edit') }}">Edit Profile</a>
                </li>
            </ul>

            <a href="{{ route('users.show', Auth::user()) }}"
                class="btn btn-default btn-block mt-5">View my profile</a>
        </div>
        <div class="col-md-9">
            <div class="card profile">
                <div class="card-header text-center">Your Profile</div>
                <div class="card-body">
                    <div class="container" style="width: 80%;">
                        <form method="POST" action="{{ route('user.update') }}">
                            @csrf
                            @method('PATCH')
            
                            <div class="form-group">
                                <input id="name" type="text"  name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Full name"
                                    value="{{ old('name') ?? $user->name }}" required autocomplete="name" autofocus>
            
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
                                    value="{{ old('email') ?? $user->email }}" required autocomplete="email">
            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <input id="phone_number" type="text" name="phone_number"
                                    class="form-control @error('phone_number') is-invalid @enderror"
                                    placeholder="Phone no."
                                    value="{{ old('phone_number') ?? $user->phone_number }}" required autocomplete="phone_number">
            
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <textarea
                                    name="description"
                                    id="description" class="form-control"
                                    placeholder="Description"
                                    cols="25" rows="5">{{ old('description') ?? $user->description }}</textarea>
            
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <small class="ml-1"><em>(6 characters minimum)</em></small>
                                <input id="password" type="password" name="password"
                                    class="mt-1 form-control @error('password') is-invalid @enderror"
                                    placeholder="Password" autocomplete="new-password">
            
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
            
                            <div class="form-group">
                                <input id="password-confirm" type="password" name="password_confirmation"
                                    class="form-control"
                                    placeholder="Confirm password" autocomplete="new-password">
                            </div>
            
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-normal btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
