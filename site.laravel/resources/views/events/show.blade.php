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
            <h3>O evento conta com:</h3>
            <ul id="itens-list">
                @foreach($events -> itens as $itens)
                <li>{{$itens}}</li>
                @endforeach
            </ul>
            <h2>
                <form action="/events/{{$events->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                </form>
            </h2>
        </div>
        <h5>
            <a href="/">Voltar para pagina principal</a>
        </h5>
    </div>
</div>
@endsection