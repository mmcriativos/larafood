@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')
    <h1>Editar perfil - {{ $profile->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            #filtros
        </div>
        <div class="card-body">
            <form action="{{ route('profiles.update', $profile->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.pages.profiles._partials.form')
            </form>
        </div>
        <div class="card-footer">
            #footer
        </div>
    </div>
@stop