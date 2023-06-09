<!DOCTYPE html>
<html>
<head>
    <title>Edite seu Evento</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

    <div id="event-create-container" class="col-md-6 offset-md-3">
     <h1>Editando: {{$event->title}}</h1>
        <form action="/events/update/{{$event->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="img">Foto do Evento</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <div class="form-group">
                <label for="title">Nome do seu Evento</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value="{{$event->title}}">
            </div>

            <div class="form-group">
                <label for="title">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Nome do Evento" value="{{$event->city}}">
            </div>

            <div class="form-group">
                <label for="title">Descrição</label>
                <textarea type="text" class="form-control" id="description" name="description" placeholder="Descrição do Evento">{{$event->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="title">Adicione Itens do evento</label>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="palcoCentral"> Palco Central
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="areaCoberta"> Área Coberta
                </div>
                <div class="form-group">
                    <input type="checkbox" name="itens[]" value="camarote"> Camarote
                </div>
            </div>
            <div class="form-group">
                <label for="title">Atrações</label>
                <input type="text" class="form-control" id="attractions" name="attractions" placeholder="Atrações do Evento" value="{{$event->attractions}}">
            </div>
            <div class="form-group">
                <label for="date">Data</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$event->date}}">
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
    </div>