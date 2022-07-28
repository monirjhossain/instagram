@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row text-center">
            <h1>Edit Profile</h1>
        </div>
        <div class="col-8 offset-2 mt-5">
            <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('PATCH')
                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label text-md-end">Title:</label>

                    <div class="col-md-6">
                    <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" title="title" value="{{ old('title') ?? $user->profile->title}}" autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label text-md-end">Description:</label>

                    <div class="col-md-6">
                    <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" description="description" value="{{ old('description') ?? $user->profile->description }}" autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="url" class="col-md-4 col-form-label text-md-end">URL:</label>

                    <div class="col-md-6">
                    <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" url="url" value="{{ old('url') ?? $user->profile->url }}" autocomplete="url" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label text-md-end">Image:</label>

                    <div class="col-md-6">
                    <input id="image" type="file" name="image" class="form-control @error('image') is-invalid @enderror" image="image" value="{{ old('image') }}" autocomplete="image" autofocus>

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row mb-3 offset-4">
                    <button class="btn btn-primary mt-3">Save Profile</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
