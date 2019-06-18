@extends('layouts.index')

@section('show')
  <div class="website-type container">
      <br>
      <small>{{ $posts->date }}</small>
      <br>

      <img style="width:50%;" class="img-fluid" src="{{ asset($posts->image) }}" alt="Post header image">
      <h1>{{ $posts->title }}</h1>
      <p>{{ $posts->body }}</p>
      <a href="{{ url('/blog') }}">Go back</a>
      <br><br>
  </div>
@endsection
