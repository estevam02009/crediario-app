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
        </table>
    </div>

@endsection
