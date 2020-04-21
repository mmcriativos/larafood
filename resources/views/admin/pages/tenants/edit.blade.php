@extends('adminlte::page')

@section('title', "Editar a empresa {$tenant->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><b>Dashboard</b></a></li>
        <li class="breadcrumb-item"><a href="{{ route('tenants.index') }}"><b>Empresas</b></a></li>
        <li class="breadcrumb-item active"><b>Editar Empresa</b></li>
    </ol>
    <hr>
    <h1>Editar a empresa: <b>{{ $tenant->name }}</b></h1>
@stop

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body">
            <form action="{{ route('tenants.update', $tenant->id) }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.pages.tenants._partials.form')
            </form>
        </div>
    </div>
@endsection