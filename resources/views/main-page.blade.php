@extends('layouts.app')

@section('dc-card')
<div class="low-main">
    <a href="#" class="button-sign-up">
      <h4>CURRENT SERIES</h4>
    </a>
    <div class="container comics-boxes">
        @foreach ($fumetti as $elemento)
            <div class="comic-container">
                <img src="{{ $elemento['thumb'] }}" alt="">
                <h4> {{$elemento['title']}}</h4>
            </div>
        @endforeach
        <div>
          <a href="#" class="button-load-more">LOAD MORE</a>
        </div>
    </div>
</div>
@endsection