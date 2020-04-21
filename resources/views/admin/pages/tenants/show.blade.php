@extends('adminlte::page')

@section('title', "Detalhes da empresa {$tenant->name}")

@section('content_header')
    <h1>Detalhes da empresa: <b>{{ $tenant->name }}</b></h1>
@stop

@section('content')
    <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid" src="{{ url("storage/{$tenant->logo}") }}" alt="{{ $tenant ->title}}">
              </div>

              <h3 class="profile-username text-center">{{ $tenant->name }}</h3>

              <p class="text-muted text-center">{{ $tenant->plan->name }}</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>CNPJ</b> <a class="float-right">{{ $tenant->cnpj }}</a>
                </li>
                <li class="list-group-item">
                    <b>E-MAIL</b> <a class="float-right">{{ $tenant->email }}</a>
                </li>
                <li class="list-group-item">
                    <b>ATIVO?</b> <a class="float-right">{{ $tenant->active == 'Y' ? 'SIM' : 'NÃO' }}</a>
                </li>
                <li class="list-group-item">
                    <b>DATA DE ASSINATURA</b> <a class="float-right">{{ $tenant->subscription }}</a>
                </li>
                <li class="list-group-item">
                    <b>DATA DE EXPIRAÇÃO</b> <a class="float-right">{{ $tenant->expires_at }}</a>
                </li>
                <li class="list-group-item">
                    <b>IDENTIFICADOR</b> <a class="float-right">{{ $tenant->subscription_id }}</a>
                </li>
                <li class="list-group-item">
                    <b>ATIVO?</b> <a class="float-right">{{ $tenant->subscription_active ? 'SIM' : 'NÃO' }}</a>
                </li>
                <li class="list-group-item">
                    <b>CANCELOU?</b> <a class="float-right">{{ $tenant->subscription_suspended ? 'SIM' : 'NÃO' }}</a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->


        {{-- <div class="card-body">
            <ul>
                    <img src="{{ url("storage/{$tenant->logo}") }}" alt="{{ $tenant ->title}}" style="max-width:150px">
                    <hr>
                <li>
                    <strong>Plano: </strong> {{ $tenant->plan->name }}
                </li>
                <li>
                    <strong>Título: </strong> {{ $tenant->name }}
                </li>
                <li>
                    <strong>URL: </strong> {{ $tenant->url }}
                </li>
                <li>
                    <strong>E-mail: </strong> {{ $tenant->email }}
                </li>
                <li>
                    <strong>CNPJ: </strong> {{ $tenant->cnpj }}
                </li>
                <li>
                    <strong>Ativo: </strong> {{ $tenant->active == 'Y' ? 'SIM' : 'NÃO' }}
                </li>
            </ul>

            <hr>
            <h3>Assinatura</h3>
            <ul>
                <li>
                    <strong>Data de Assinatura: </strong> {{ $tenant->subscription }}
                </li>
                <li>
                    <strong>Data de Expiração: </strong> {{ $tenant->expires_at }}
                </li>
                <li>
                    <strong>Identificador: </strong> {{ $tenant->subscription_id }}
                </li>
                <li>
                    <strong>Ativo? </strong> {{ $tenant->subscription_active ? 'SIM' : 'NÃO' }}
                </li>
                <li>
                    <strong>Cancelou? </strong> {{ $tenant->subscription_suspended ? 'SIM' : 'NÃO' }}
                </li>
            </ul>

            @include('admin.includes.alerts')

            <form action="{{ route('tenants.destroy', $tenant->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O PRODUTO {{ $tenant->title }}</button>
            </form>
        </div> --}}
    </div>
@endsection