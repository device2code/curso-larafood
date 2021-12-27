@extends('adminlte::page')

@section('title', "Detalhes do plano {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.index')}}">Planos</a></li>
        <li class="breadcrumb-item"><a href="{{route('plans.show', $plan->url)}}">{{ $plan->name }}</a></li>
        <li class="breadcrumb-item active"><a href="{{route('details.plan.index', $plan->url)}}">Detalhes</a></li>
    </ol>
    <h1>Detalhes do plano {{ $plan->name }} <a href="{{ route('plans.create')}}" class="btn btn-dark"><i class="fas fa-plus-circle"></i></a> </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $detail)
                    <tr>
                        <td>
                            {{ $detail->name }}
                        </td>
                        <td>
                            <a href="{{ route('plans.show', $plan->url ) }}" class="btn btn-warning"><i class="fas fa-file-alt"></i></a>
                            <a href="{{ route('plans.edit', $plan->url ) }}" class="btn btn-info"><i class="fas fa-pen"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {{ $details->appends($filters)->links()}}
            @else
                {{ $details->links()}}
            @endif
        </div>
    </div>
@stop
