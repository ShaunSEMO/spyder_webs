          <div>
              <h2 class="sec-header">Blog</h2>
              <hr class="sh-uline">
              <br>
                <div class="row">
                  @foreach($posts as $post)
                  <div class="col-sm col-md-12 col-lg-4">
                    <div class="each-post">
                        <div class="date">
                          <small>{{ $post->date }}</small>
                        </div>
                        <br>
                        <br>
                        <img class="img-fluid post-image" src="{{ $post->image }}" alt="Post header image">
                        <br>
                        <br>
                        <h1 class="post-title">{{ $post->title }}</h1>
                        <br>
                        <p>{{ str_limit($post->body, $limit = 200, $end = '...') }}</p>
                        <a href="{{ url('blog/'.$post->id) }}">Read More</a>
                        <br><br>
                    </div>
                  </div>
                @endforeach
              </div>

              <a href="{{ url('/blog') }}"><button type="button" class="btn btn-primary">Go to blog</button></a>
          </div>  