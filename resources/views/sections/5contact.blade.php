<div class="contact-sec">
                <h2 class="sec-header">Contact Me</h2>
                <hr class="sh-uline">
                <br>

        <img class="icons ic1" src="{{ asset('img/instagram.png') }}" alt="">
        <img class="icons ic2" src="{{ asset('img/facebook.png') }}" alt="">
        <img class="icons ic3" src="{{ asset('img/twitter.png') }}" alt="">
        <br>
        <br>
        <br>
        <div class="container form">
            <form action="https://formspree.io/info@spyderwebs.co.za " method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                        @if (Session::has('file_message'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('file_message')}}
                            </div>
                        @endif
                        <input name="name" type="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                        @if ($errors->has('name'))
                            <small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
                        @endif
                        <br>
                        <input name="email" type="name" class="form-control" id="exampleFormControlInput1" placeholder="E-mail">
                        @if ($errors->has('email'))
                            <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
                        @endif
                        <br>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message..."></textarea>
                        @if ($errors->has('message'))
                            <small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
                        @endif
                        <br>
                        <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
        </div>
        <br>
        <h5 class="ctct" style="font-size:120%">082 433 7673</h5>
        <h5 class="ctct" style="font-size:120%">info@spyderwebs.co.za</h5>
</div>