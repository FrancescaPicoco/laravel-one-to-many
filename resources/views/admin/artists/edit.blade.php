@extends('layouts.admin')

@section('content')
<div class="container-sm text-light">
    <form action="{{ route('admin.artists.update', $artItems->id) }}" method="POST"> {{--non legge id--}}
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') ?? $artItems->title }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="series" class="form-label">Autore</label>
              <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author') ?? $artItems->author }}">
              @error('series')
            <div class="invalid-feedback">{{ $message }}</div>
             @enderror
          </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') ?? $artItems->description }}">
               @error('description')
                   <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>           
          </div>
        </div>

        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="img" class="form-label">img:src</label>
               <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" name="img" value="{{ old('img') ?? $artItems->img }}">
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