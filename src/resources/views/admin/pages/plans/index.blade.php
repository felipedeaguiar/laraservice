@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-dark">Adicionar</a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form class="form form-inline" action="{{route('plans.search')}}" method="POST">
                @csrf
                <input type="text" name="filter" placeholder="Nome" class="form-control">
                <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plans as $plan)
                        <tr>
                            <td>
                                {{ $plan->name }}
                            </td>
                            <td>
                                {{$plan->price}}
                            </td>
                            <td>
                                <a href="{{route('plans.show', $plan->url)}}" class="btn btn-warning">Ver</a>
                                <a href="{{route('plans.edit', $plan->url)}}" class="btn btn-default">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if(isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        document.getElementById('destroy').addEventListener('click', function () {
            if (window.confirm("Você realmente deletar?")) {
                return true;
            }
        });
    </script>
@stop
