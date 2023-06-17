@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <h1>Lista de Clientes</h1>
        <a href="{{ route('clientes.create') }}" class="btn btn-outline-primary btn-sm">Cadastrar Cliente</a>

        <table class="table table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>Cód.</th>
                    <th>Nome</th>
                    <th>End.</th>
                    <th>Fone</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th style="width: 200px">Açōes</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->endereco }}</td>
                        <td>{{ $cliente->telefone }}</td>
                        <td>{{ $cliente->cidade }}</td>
                        <td>{{ $cliente->uf }}</td>
                        <td>
                            <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-outline-info btn-sm">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
