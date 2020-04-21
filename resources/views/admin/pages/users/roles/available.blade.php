@extends('adminlte::page')

@section('title', 'Cargos disponíveis para o usuário')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('users.index') }}" class="active">Usuários</a></li>
    </ol>
    <h1>Cargos disponíveis para o usuário</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action="{{ route('users.roles.available', $user->id) }}" method="POST" class="form form-inline">
            @csrf
            <input type="text" name="filter" placeholder="Pesquisar..." class="form-control" value="{{ $filters['filter'] ?? '' }}">
            <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th width="50px">#</th>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                <form action="{{ route('users.roles.attach', $user->id) }}" method="post">
                        @csrf

                        @foreach ($roles as $role)
                        <tr>
                            <td>
                                <input type="checkbox" name="roles[]" value="{{ $role->id }}">
                            </td>
                            <td>
                                {{ $role->name }}
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="500">
                            @include('admin.includes.alerts')
                            <button type="submit" class="btn btn-dark">VINCULAR</button>
                        </td>
                    </tr>
                    </form>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $roles->appends($filters)->links() !!}
            @else
                {!! $roles->links() !!}
            @endif
        </div>
    </div>
@stop