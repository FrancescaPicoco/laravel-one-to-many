@extends('layouts.admin')

@section('content')
<div class="container-sm d-flex">
 <div class="card" style="width: 18rem;">

    <img src="{{ $artItems->img }}" class="card-img-top" alt="{{ $artItems->title }}">

    <div class="card-body bg-dark text-light">
        <h5 class="card-title">name: {{ $artItems->title }} </h5>
        <p class="card-text">
            <p class="card-text">descr: {{ $artItems->description }}</p>
            <p>author: {{ $artItems->author }}</p>
        </p>
    </div>
  </div>
</div>
@endsection