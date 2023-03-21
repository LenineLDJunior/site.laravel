@extends('main')
@section('title', 'Criar evento ')
@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie Seu Evento </h1>
    <form action="/events" method="post">
        @csrf
        <div class="form-group">
            <label for="img">Foto do Evento</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Eventos</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Descrição</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrição do Evento"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Atrações</label>
            <input type="text" class="form-control" id="attractions" name="attractions" placeholder="Atrações do Evento">
        </div>
        <div class="form-group">
            <label for="title">Data</label>
            <input type="text" class="form-control" id="date" name="date" placeholder="Data do Evento">
        </div>
        <div class="form-group">
            <label for="title">Privado</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>


@endsection