@extends('main')
@section('title')
@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="rol-md-6">
            <img src="/img/events/{{ $events -> image}}" class="img-fluid" alt="{{$events->title}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$events->title}}</h1>
            <p class="events-city">{{$events->city}}</p>
        </div>
    </div>
</div>
@endsection