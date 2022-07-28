@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="row text-center">
            <h1>Add New Post</h1>
        </div>
        <div class="col-8 offset-2 mt-5">
            <form action="/p" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label text-md-end">Post Caption</label>

                    <div class="col-md-6">
                    <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label text-md-end">Post image</label>

                    <div class="col-md-6">
                    <input id="image" type="file" name="image" class="form-control @error('image') is-invalid @enderror" image="image" value="{{ old('image') }}" autocomplete="image" autofocus>

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row mb-3 offset-4">
                    <button class="btn btn-primary mt-2">Add New</button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
