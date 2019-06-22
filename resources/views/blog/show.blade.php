@extends('layouts.index')

@section('show')
  <div class="website-type container">
      <br>
      <small>{{ $posts->date }}</small>
      <br>

      <img style="width:50%;" class="img-fluid" src="{{ asset($posts->image) }}" alt="Post header image">
      <br><br>
      <h1>{{ $posts->title }}</h1>
      <br>
      <p>{{ $posts->body }}</p>
      <br>
      <a href="{{ url('/blog') }}">Go back</a>
      <br><br>
  </div>
@endsection
