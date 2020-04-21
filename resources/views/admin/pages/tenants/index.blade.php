@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('tenants.index') }}">Empresas</a></li>
    </ol>
@stop

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <strong>EMPRESAS</strong> <a href="{{ route('tenants.create') }}" class="btn btn-dark" style="margin-left: 15px">ADICIONAR EMPRESA <i class="fas fa-plus-square"></i></a>
              </h3>
            <form action="{{ route('tenants.search') }}" method="POST" class="form form-inline float-right">
            @csrf
            <input type="text" name="filter" placeholder="Nome" class="form-control" value="{{ $filters['filter'] ?? '' }}">
            <button type="submit" class="btn btn-dark">Filtrar</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th width="200">LOGOTIPO</th>
                        <th>EMPRESA</th>
                        <th>CNPJ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tenants as $tenant)
                        <tr>
                            <td>
                                <img src="{{ url("storage/{$tenant->logo}") }}" alt="{{ $tenant ->name}}" style="max-width:150px">
                            </td>
                            <td>{{ $tenant ->name }}</td>
                            <td>{{ $tenant ->cnpj }}</td>
                            <td class="project-actions text-right">
                                <a href="{{ route('tenants.edit', $tenant->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i> <b>EDITAR</b></a>
                                <a href="{{ route('tenants.show', $tenant->id) }}" class="btn btn-info btn-sm"><i class="far fa-folder"></i> <b>VISUALIZAR</b></a>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $tenants->appends($filters)->links() !!}
            @else
                {!! $tenants->links() !!}
            @endif
        </div>
    </div>
@stop