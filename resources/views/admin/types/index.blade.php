@extends('layouts.admin')

@section('content')
<div class="container-sm d-flex flex-wrap p-5">
    @foreach($types as $type)   
   <div class="bg-dark text-light mycard">
       <div class="card-title"><h3><em class="grey">{{ $type->name }}</em></h3></div>
       <div class="card-body">
         <p> {{ $type->description }}</p>
         <h3 class="red"> {{ $type->epoch }}</h3>
        {{-- <a href="{{ route('admin.artists.edit', $artItem->id) }}" class="btn btn-outline-secondary">Edit</a>
        <a href="{{ route('admin.artists.show', $artItem->id) }}" class="btn btn-outline-secondary">show details</a> --}}
       </div>
   </div>
   @endforeach
</div>
@endsection