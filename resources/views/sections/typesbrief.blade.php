<h2 class="sec-header">What kind of website would you like?</h2>
<hr class="sh-uline">

<br>
    <div class="row">

          @foreach($types as $type)
        <div class="col-sm col-md-12 col-lg-4">
          <div class="website-type">
            <img class="img-fuid img-thumbnail" src="{{ $type->image }}" alt="Type of website.">
            <br>
            <br>
            <h1>{{ $type->title }}</h1>
            <br>
            <p>{{ $type->body }}</p>
            <br>
            <a href="{{ url('/types/'.$type->id) }}"><button type="button" class="btn btn-primary">Select</button></a>
          </div>
          <br><br>
        </div>
        @endforeach

    </div>
    <a class="btn btn-primary" href="{{ url('types') }}">View more</a>