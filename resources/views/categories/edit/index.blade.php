@extends('layouts.app')

@section('content')
  <div class="container">
    <form action="{{ route('updateCategory', ['id'=>$category->id]) }}" method="post">
    
      @csrf

      <div class="form-group row">
        <label for="inputName">Nome da categoria</label>
        <input type="text" class="form-control" name="inputName" id="inputName" value="{{$category->name}}">
      </div>
      
      <div class="form-group row">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>

    </form>
  </div>
@endsection