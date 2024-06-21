@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Cadastro de Produto</h1>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do produto"
                    value={{ $category->name }}>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="description">Descrição:</label>
            <div class="col-sm-10">
                <textarea id="description" class="form-control" name="description" rows="4" cols="50"
                    placeholder="Digite a descrição do produto"> {{ $category->description }} </textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <form action="{{ route('category.destroy', $category->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" >Excluir</button>
                </form>
            </div>
        </div>
    </div>
@endsection