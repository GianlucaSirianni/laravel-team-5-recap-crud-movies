@extends('layouts.app')

@section('main-content')


@foreach ($movies as $elem)
<div class="card" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title">Title: {{$elem->title}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Description: {{$elem->description}}</h6>
    <p class="card-text">Release Year: {{$elem->year}}</p>
  </div>
</div>
@endforeach

@endsection
