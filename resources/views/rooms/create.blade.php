@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card profile">
            <div class="card-header">
                Create your byutifoo places
            </div>
            <div class="card-body">
                <div class="container container-small">
                    <form method="POST" action="{{ route('rooms.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="home_type">Home type</label>
                                    <select name="home_type" id="home_type" class="form-control @error('home_type') is-invalid @enderror" value="{{ old('home_type') }}">
                                        <option selected disabled>Select...</option>
                                        @foreach ($home_types as $option)
                                            <option value="{{ $option }}">{{ $option }}</option>
                                        @endforeach
                                    </select>

                                    @error('home_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="room_type">Room type</label>
                                    <select name="room_type" id="room_type" class="form-control @error('room_type') is-invalid @enderror">
                                        <option selected disabled>Select...</option>
                                        @foreach ($room_types as $option)
                                            <option value="{{ $option }}">{{ $option }}</option>
                                        @endforeach
                                    </select>

                                    @error('room_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="accommodate">Accommodate</label>
                                    <select name="accommodate" id="accommodate" class="form-control @error('accommodate') is-invalid @enderror">
                                        <option selected disabled>Select...</option>

                                        @foreach ($count_options as $key => $option)
                                            <option value="{{ $key }}">{{ $option }}</option>
                                        @endforeach
                                    </select>

                                    @error('accommodate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bedroom_count">Bedrooms</label>
                                    <select name="bedroom_count" id="bedroom_count" class="form-control @error('bedroom_count') is-invalid @enderror">
                                        <option selected disabled>Select...</option>
                                        @foreach ($count_options as $key => $option)
                                            <option value="{{ $key }}">{{ $option }}</option>
                                        @endforeach
                                    </select>

                                    @error('bedroom_count')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bathroom_count">Bathrooms</label>
                                    <select name="bathroom_count" id="bathroom_count" class="form-control @error('bathroom_count') is-invalid @enderror">
                                        <option selected disabled>Select...</option>
                                        @foreach ($count_options as $key => $option)
                                            <option value="{{ $key }}">{{ $option }}</option>
                                        @endforeach
                                    </select>

                                    @error('bathroom_count')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-normal">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection