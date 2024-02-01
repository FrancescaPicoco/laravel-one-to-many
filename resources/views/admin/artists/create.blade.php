@extends('layouts.admin')

@section('content')
<div class="container-sm text-light">
    <form action="{{ route('admin.artists.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}} ">
                @error('title')
                 <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
        </div>
     </div>
        
    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="type" class="form-label">Autrice/Artista</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author')}} ">
              @error('author')
                  <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description')}} ">
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
        
    <div class="row">
        <div class="col-6 offset-3">
            <div class="mb-3">
                <label for="img" class="form-label">IMG</label>
                <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" name="img" value="{{ old('img')}} ">
            @error('img')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
        </div>
    </div>
 
        <div class="col text-center">  
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
</div>
@endsection