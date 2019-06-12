@foreach($types as $type)

  <div class="website-type">
    <img class="img-fuid img-thumbnail" src="{{ $type->image }}" alt="Type of website.">
    <h1>{{ $type->title }}</h1>
    <p>{{ $type->body }}</p>
    <button type="button" class="btn btn-primary">Select</button>
  </div>
@endforeach
  <br><br>
  <a class="btn btn-primary" href="{{ url('types') }}">View more</a>

  <!-- <button type="button"></button> -->
