@extends('layouts.app')

@section('title', 'Edição de Jogo')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Editar Jogo</h1>
    <hr>
    <form action="{{ route('jogos-update', ['id' => $jogos->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite o nome do jogo" required>
        </div>

        <div class="form-group mb-3">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite a categoria do jogo" required>
        </div>

        <div class="form-group mb-3">
            <label for="ano_criação">Ano de Criação</label>
            <input type="number" class="form-control" name="ano_criação" value="{{ $jogos->ano_criação }}" placeholder="Digite o ano de criação" required>
        </div>

        <div class="form-group mb-4">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite o valor do jogo" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Atualizar Jogo</button>
        </div>
    </form>
</div>
@endsection
