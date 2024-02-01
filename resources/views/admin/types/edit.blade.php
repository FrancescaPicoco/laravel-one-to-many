@extends('layouts.admin')

@section('content')
<div class="container-sm text-light">
    <form action="{{ route('admin.types.update', $types->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="name" class="form-label">Titolo</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $types->name }}">
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description') ?? $types->description }}">
               @error('description')
                   <div class="invalid-feedback">{{ $message }}</div>
               @enderror
             </div>           
          </div>
        </div>

        <div class="row">
          <div class="col-6 offset-3">
            <div class="mb-3">
              <label for="epoch" class="form-label">Epoch</label>
               <input type="text" class="form-control @error('epoch') is-invalid @enderror" id="epoch" name="epoch" value="{{ old('epoch') ?? $types->epoch }}">
                @error('epoch')
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