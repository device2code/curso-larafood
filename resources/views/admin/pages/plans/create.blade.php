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
                @include('admin.pages.plans._partials.form')
            </form>
        </div>
    </div>
@endsection
