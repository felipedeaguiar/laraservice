@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Plano: {{$plan->name}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plans.update', ['url' => $plan->url]) }}" class="form" method="POST">
                @csrf
                @method('PUT')
                @include('admin.pages.plans._partials.form')
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
