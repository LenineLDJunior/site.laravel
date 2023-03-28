<link rel="stylesheet" href="/css/style.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Ver todos os Eventos !") }} <a href="/">Voltar a Home</a>
                </div>
                <link rel="stylesheet" href="/css/style.css">
            <div class="dashboard-container">
                @if (count($events) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Participantes</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>   
                    <tbody>
                        @foreach($events as $events)
                        <tr>
                            <th scropt="row"> {{$loop->index +1}}</th>
                            <td><a href="/events/{{$events->id}}">{{$events -> title}}</a></td>
                            <td>0</td>
                            <td><a href="#">Editar</a><a href="#">Deletar</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    @else
                        <h2> Você ainda não tem evento : <a href="/events.create">Criar seu Evento</a></h2>
                 @endif
            </div>
        </div>
    </div>
    <div>
    
</div>
    <div>
</x-app-layout>


