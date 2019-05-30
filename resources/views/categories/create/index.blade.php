@extends('layouts.app')

@section('content')
  <div class="container">
    <form method="POST" action="">
      
      <div class="form-group row">
        <label for="inputName" class="">Nome da categoria</label>
        <input type="text" class="form-control" name="inputName" id="inputName">
      </div>
      
      <div class="form-group row">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>

    </form>
  </div>
@endsection