@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Cadastro de Produto</h1>
        @component('components.form-error-fields')
        @endcomponent
        <form role="form" class="mt-5" action="{{ route('products.store') }}" method="post">
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
                <label class="col-sm-2 col-form-label" for="price">Preço:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" name="price" step="0.01"
                        placeholder="Digite o preço do produto">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="stock">Estoque:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="stock" name="stock"
                        placeholder="Digite a quantidade em estoque">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="category_id">Categoria:</label>
                <div class="col-sm-10">
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                        @endforeach
                    </select>
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
