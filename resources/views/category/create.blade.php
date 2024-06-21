@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Cadastro de Categoria</h1>
        @component('components.form-error-fields')
        @endcomponent
        <form role="form" class="mt-5" action="{{ route('category.store') }}" method="post">
            @csrf()
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Digite o nome do produto">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="description">Descrição:</label>
                <div class="col-sm-10">
                    <textarea id="description" class="form-control" name="description" rows="4" cols="50"
                        placeholder="Digite a descrição do produto"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Enviar" name="submit" class="btn btn-primary" />
                </div>
            </div>
        </form>
    </div>
@endsection
