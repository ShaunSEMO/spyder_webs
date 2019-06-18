@extends('layouts.index')

@section('content')
          {{-- site content --}}
          <div class="container site-content">
            @include('sections.typesbrief', $types)
            <br><br>
            @include('sections.2services')
          </div>
          <div class="site-content">
            <br><br>
            @include('sections.3pricing')
            <br><br>
            @include('sections.4blog')
            <br><br>
            @include('sections.1about')
            <br><br>
            @include('sections.5contact')
          </div>
@endsection
