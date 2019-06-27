@extends('layouts.app')

@section('content')

  <div class="container">
    <form method="POST" action="{{ route('storeProduct') }}" enctype="multipart/form-data">
      
      @csrf

      <div class="form-group row">
        <label for="inputName">Nome do produto</label>
        <input type="text" class="form-control" name="inputName" id="inputName">
      </div>
      
      <div class="form-group row">
        <label for="inputValue">Valor do produto</label>
        <input type="number" step="0.01" name="inputValue" id="inputValue" class="form-control">
      </div>

      <div class="form-group row">
        <label for="inputDescription">Descrição do produto</label>
        <textarea class="form-control" name="inputDescription" id="inputDescription" rows="3"></textarea>
      </div>

      <div class="form-group row">
        <label for="inputCategory">Categoria do produto</label>
        <select class="form-control" name="inputCategory" id="inputCategory">
          <option value="">Selecione a categoria</option>
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group row">
        <label for="inputImage">Imagem do produto</label>
        <input type="file" name="inputImage" id="inputImage" class="form-control">
      </div>

      <div class="form-group row">
        <div class="">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </div>

    </form>
  </div>
@endsection