@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-8 offset-2">
            <h1>Add New Post</h1>
            <form action="/post" method="POST" enctype="multipart/form-data">
                @csrf
    
                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label">Caption</label>
    
                        <input 
                            id="caption" 
                            type="text" 
                            class="form-control @error('caption') is-invalid @enderror" 
                            name="caption" 
                            value="{{ old('caption') }}" 
                            autocomplete="caption" 
                            autofocus 
                        />
    
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label">Post image</label>
    
                        <input 
                            id="image" 
                            type="file" 
                            class="form-control @error('image') is-invalid @enderror" 
                            name="image" 
                            value="{{ old('image') }}" 
                            autocomplete="image" 
                            autofocus 
                        />
    
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
    
                <div class="row">
                    <button type="submit" class="btn btn-primary">Add New Post</button>
                </div>
            </form>
        </div>
    </div>
        

</div>
@endsection
