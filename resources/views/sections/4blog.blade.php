<div class="sec-cont container">
                <h2 class="sec-header">Blog</h2>
                <hr class="sh-uline">
                <br>

                @foreach($posts as $post)
                  <br>
                  <small>{{ $post->date }}</small>
                  <br>
                  <img class="img-fluid" src="{{ $post->image }}" alt="Post header image">
                  <h1>{{ $post->title }}</h1>
                  <p>{{ str_limit($post->body, $limit = 200, $end = '...') }}</p>
                  <a href="{{ url('blog/'.$post->id) }}">Read More</a>
                  <br><br>
                @endforeach
                <a href="{{ url('/blog') }}"><button type="button" class="btn btn-primary">Go to blog</button></a>

</div>
