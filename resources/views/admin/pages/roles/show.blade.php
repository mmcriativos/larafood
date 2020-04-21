@extends('adminlte::page')

@section('title', "Detalhes do Cargo - {$role->name}")

@section('content_header')
    <h1>Detalhes do Cargo - <b>{{ $role->name }}</b></h1>
@stop

@section('content')
    <div class="card">
    @include('admin.includes.alerts')
        <div class="card-header">
            <strong>{{ $role->name }}</strong>
        </div>
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome:</strong> {{ $role->name }}
                </li>
                <li>
                    <strong>Descrição:</strong> {{ $role->description }}
                </li>
            </ul>

            <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                @CSRF
                @method('DELETE')
                <button type="submit" class="btn btn-danger">EXCLUIR O CARGO</button>
            </form>
        </div>
    </div>
@endsection