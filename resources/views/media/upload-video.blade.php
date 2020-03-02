@extends('layouts.main-layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-5 col-xl-5">
            <div class="card">
                <div class="card-header">Post Video</div>

                <div class="card-body">
                    <form method="POST" action="/upload/video">
                        @csrf
                        <div class="form-group">
                            <label for="title" >{{ __('title') }}</label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="youtube_url" >{{ __('Youtube Link') }}</label>
                                <input id="youtube_url" type="text" class="form-control @error('youtube_url') is-invalid @enderror" name="youtube_url" value="{{ old('youtube_url') }}" required autocomplete="youtube_url" autofocus>

                                @error('youtube_url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="description" >{{ __('description') }}</label>
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" >{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                        </div>
                        {{-- <div class="form-group">
                            <label for="type">Account Type</label>
                            <select id="post_type" type="text" class="form-control" name="post_type_id" required>
                                <option value="1">User</option>
                                <option value="2">Influencer</option>
                                <option value="3">Artist</option>
                                <option value="4">Producer</option>
                                <option value="5">Director</option>
                                <option value="6">Model</option>
                            </select>
                        </div> --}}

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
