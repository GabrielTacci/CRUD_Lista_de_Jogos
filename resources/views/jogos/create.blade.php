@extends('layouts.app')

@section('title', 'Cadastro de Jogo')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Cadastrar Novo Jogo</h1>
    <hr>
    <form action="{{ route('jogos-store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite o nome do jogo" required>
        </div>

        <div class="form-group mb-3">
            <label for="categoria">Categoria</label>
            <input type="text" class="form-control" name="categoria" placeholder="Digite a categoria do jogo" required>
        </div>

        <div class="form-group mb-3">
            <label for="ano_criação">Ano de Criação</label>
            <input type="number" class="form-control" name="ano_criação" placeholder="Digite o ano de criação" required>
        </div>

        <div class="form-group mb-4">
            <label for="valor">Valor</label>
            <input type="number" class="form-control" name="valor" placeholder="Digite o valor do jogo" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Cadastrar Jogo</button>
        </div>
    </form>
</div>
@endsection
