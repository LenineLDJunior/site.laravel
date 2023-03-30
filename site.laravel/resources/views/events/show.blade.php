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
            <h1>Dono do evento : {{$eventOwner['name']}} </h1>
            <h1>Cidade que irá acontecer o evento : <h3>{{$events->city}}</h3></h1>
            <h3>O evento conta com:</h3>
            <ul id="itens-list">
                @foreach($events -> itens as $itens)
                <li>{{$itens}}</li>
                @endforeach
            </ul>
            <form action="/events/confirm/{id}" method="POST">
                @csrf
                <a href="/events/confirm/{id}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                        Confirmar sua presença
                </a>
            </form>

        </div>
        <h5>
            <a href="/">Voltar para pagina principal</a>
        </h5>
    </div>
</div>
@endsection