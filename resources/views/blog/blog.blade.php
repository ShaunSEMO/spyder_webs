@extends('layouts.index')

@section('blog')
  <div class="website-type container">
    @foreach($posts as $post)
      <br>
      <small>{{ $post->date }}</small>
      <br>
      <img style="width:50%;" class="img-fluid" src="{{ $post->image }}" alt="Post header image">
      <h1>{{ $post->title }}</h1>
      <p>{{ str_limit($post->body, $limit = 200, $end = '...') }}</p>
      <a href="{{ url('blog/'.$post->id) }}">Read More</a>
      <br><br>
    @endforeach
    {{ $posts->links() }}


  </div>
@endsection
