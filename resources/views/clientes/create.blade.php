@extends('layouts.app')

@section('content')

    <div class="container mt-3">
        <h1>Cadastrar Clientes</h1>

        <form action="{{ route('clientes.store')}}" method="post">
            @csrf
            <div class="mb-2">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-2">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
            </div>

            <div class="mb-2">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" required>
            </div>

            <div class="mb-2">
                <label for="cidade" class="form-label">Cidade</label>
                <select name="cidade" id="cidade" class="form-select">
                    <option selected>Selecione a Cidade</option>
                    <option value="1">Caraúbas</option>
                    <option value="2">Assu</option>
                    <option value="3">Mossoró</option>
                </select>
            </div>

            <div class="mb-2">
                <label for="uf" class="form-label">Estado</label>
                <select name="uf" id="uf" class="form-select">
                    <option selected>Selecione o Estado </option>
                    <option value="1">RN</option>
                    <option value="2">PB</option>
                    <option value="3">CE</option>
                </select>
            </div>

            <button type="submit" class="btn btn-outline-success btn-sm">Cadastrar</button>
            <button type="reset" class="btn btn-outline-warning btn-sm">Corrigir</button>
        </form>
    </div>

@endsection
