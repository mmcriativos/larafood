@extends('adminlte::page')

@section('title', 'Cadastrar Nova Empresa')

@section('content_header')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('tenants.index') }}">Empresas</a></li>
    <li class="breadcrumb-item active"><b>Cadastrar Nova Empresa</b></a></li>
</ol>
<hr>
    <h1><b>Cadastrar Nova Empresa</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('tenants.store') }}" class="form" method="POST" enctype="multipart/form-data">
                @csrf

                @include('admin.pages.tenants._partials.form')
            </form>
        </div>
    </div>
@endsection