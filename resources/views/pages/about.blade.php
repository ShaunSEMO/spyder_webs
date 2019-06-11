@extends('layouts.index')

@section('about')
    <div class="about-sec container">
        <h2 class="sec-header">About</h2>
        <hr class="sh-uline">
        <br>

        <div class="container about-content">
                <img class="img-circle about-img" src="{{ asset('img/me2.1.jpg') }}" alt="">
                <p class="about-p">I'm Tshegofatso Shaun Moloto, and I'm a full stack web developer working under my brand Spyder Webs. Spyder Webs is a web development brand that aims to deliver beautiful, neat and dynamic websites that communicate well with your audience and who ever you need to reach out to.</p>
                <p class="about-p">You may need a website to promote your business and reach out to your target market, a web portfolio to let the world know about you and your skills, or maybe just a blog to express your ideas and opinions on topics of your interest.</p>
                <p class="about-p">Whether you are a small business looking for an online shop, a freelancer, an artist or an influencer looking for a web portfolio. You need a professional website to serve as the front page of your online presence, Spyder Webs can take care of that for you.</p>
                <p class="about-p">To enquire for a website Spyder Webs, simply submit your details via the contact form below. You will be responded to within the next 48 hours and we'll discuss on bringing your ideas to life.</p>
                @include('sections.5contact')

                <br>
                <br>
                <a class='readmore'href="{{ url('/') }}"><button type="button" class="btn btn-primary"><i style="font-size: 30px"class="fas fa-angle-double-left"></i></button></a>
                <br>
                <br>
                <br>
        </div>
    </div>
@endsection