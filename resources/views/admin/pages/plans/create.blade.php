@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano <a href="{{route('plans.index')}}" class="btn btn-dark">Ver Planos</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('plans.store') }}" class="form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome:">
                </div>
                <div class="form-group">
                    <label for="price">Preço:</label>
                    <input type="text" name="price" class="form-control" placeholder="Preço:">
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <input type="text" name="description" class="form-control" placeholder="Descrição:">
                </div>
                <div class="form-group">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection