@extends('layouts.app')

@section('title', 'Listagem de Jogos')

@section('content')
<div class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1>Listagem de Jogos</h1>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('jogos-create') }}" class="btn btn-success">Novo Jogo</a>
        </div>
    </div>
    
    <table class="table table-striped mt-3">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ano de Criação</th>
                <th scope="col">Valor</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jogos as $jogo)
            <tr>
                <td>{{ $jogo->id }}</td>
                <td>{{ $jogo->nome }}</td>
                <td>{{ $jogo->categoria }}</td>
                <td>{{ $jogo->ano_criação }}</td>
                <td>{{ $jogo->valor }}</td>
                <td>
                    <div class="d-flex justify-content-start align-items-center">
                        <a href="{{ route('jogos-edit', ['id'=> $jogo->id]) }}" class="btn btn-primary ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                            </svg>
                        </a>
                        <form action="{{ route('jogos-destroy', ['id'=> $jogo->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"onclick='return confirm("Tem certeza que deseja excluir este jogo")'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
