@extends('layouts.admin')

@section('content')
<div class="container-sm d-flex flex-wrap p-5">
    @foreach($artItems as $artItem)   
   <div class="bg-dark text-light mycard">
       <div class="card-title"><h3><em class="grey">{{ $artItem->title }}</em></h3></div>
       <img src="{{ $artItem->img }}" class="card-img-top" alt="...">
       <div class="card-body">
         <p> {{ $artItem->description }}</p>
         <h3 class="red"> {{ $artItem->author }}</h3>
        <a href="{{ route('admin.artists.edit', $artItem->id) }}" class="btn btn-outline-secondary">Edit</a>
        <a href="{{ route('admin.artists.show', $artItem->id) }}" class="btn btn-outline-secondary">show details</a>
       </div>
   </div>
   @endforeach
</div>
@endsection