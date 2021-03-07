@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Detalhes do plano {{$plan->name}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plans.store') }}" class="form" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" class="form-control" value="{{$plan->name}}" placeholder="Nome:">
                </div>
                <div class="form-group">
                    <label>Preço</label>
                    <input type="text" name="price" class="form-control" value="{{$plan->price}}" placeholder="Preço:">
                </div>
                <div class="form-group">
                    <label>Descrição</label>
                    <input type="text" name="description" class="form-control" value="{{$plan->description}}" placeholder="Descrição:">
                </div>
            </form>
            <form action="{{route('plans.destroy', $plan->url)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </div>
    </div>
@endsection
