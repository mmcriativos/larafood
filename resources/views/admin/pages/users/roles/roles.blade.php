@extends('adminlte::page')

@section('title', 'Cargos do Usuário')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('users.index') }}" class="active">Usuários</a></li>
    </ol>
    <h1>Cargos do Usuário
        <a href="{{ route('users.roles.available', $user->id) }}" class="btn btn-dark">NOVA PERMISSÃO</a>
    </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th width="150">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>
                                {{ $role->name}}
                            </td>
                            <td style="width=10px">
                                <a href="{{ route('users.role.detach', [$user->id, $role->id]) }}" class="btn btn-danger"><i class="fas fa-trash"></i> DESVINCULAR</a>
                            </td>
                        </tr>

                    @endforeach
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