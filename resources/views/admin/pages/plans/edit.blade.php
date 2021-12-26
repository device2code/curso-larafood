@extends('adminlte::page')

@section('title', "Editar {$plan->name}")

@section('content_header')
    <h1>Editar o Plano <strong>{{$plan->name}}</strong> <a href="{{route('plans.index')}}" class="btn btn-dark">Ver Planos</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('plans.update', $plan->url) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.plans._partials.form')

            </form>
        </div>
    </div>
@endsection
