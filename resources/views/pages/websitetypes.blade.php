@extends('layouts.index')

@section('types')

    @foreach($types as $type)
    <div class="website-type">
      <br>
      <img class="img-fluid" src="{{ $type->image }}" alt="Type of website">
      <h1>{{ $type->title }}</h1>
      <p>{{ $type->body }}</p>
      <button type="button" class="btn btn-primary">Select</button>
      <br><br>
    </div>
    @endforeach

@endsection
