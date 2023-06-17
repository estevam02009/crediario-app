@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <h1>Detalhes do Cliente</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $cliente->nome }}</h5>
                <p class="card-text"><strong>Endereço: </strong> {{ $cliente->endereco }}</p>
                <p class="card-text"><strong>Telefone: </strong> {{ $cliente->telefone }}</p>
                <p class="card-text"><strong>Cidade: </strong> {{ $cliente->cidade }}</p>
                <p class="card-text"><strong>UF: </strong> {{ $cliente->uf }}</p>
                {{-- <p class="card-text"><strong>Compra: </strong> {{ $cliente->estado }}</p> --}}
                <a href="#" class="btn btn-outline-primary btn-sm">Editar</a>
                <a href="{{ route('clientes.index') }}" class="btn btn-outline-primary btn-sm">Ver todos os Clientes</a>
            </div>
        </div>
    </div>
@endsection
