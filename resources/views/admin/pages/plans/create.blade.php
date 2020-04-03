@extends('adminlte::page')

@section('title', 'Cadastrar Novo Plano')

@section('content_header')
    <h1>Cadastrar Novo Plano</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            #filtros
        </div>
        <div class="card-body">
            <form action="{{ route('plans.store') }}" class="form" method="POST">
                @csrf

                @include('admin.pages.plans._partials.form')
            </form>
        </div>
        <div class="card-footer">
            #footer
        </div>
    </div>
@stop