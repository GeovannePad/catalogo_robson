@extends('layouts.app')

@section('content')
  <div class="container">
    <form method="POST" action="">
      
      <div class="form-group row">
        <label for="inputName" class="">Nome completo</label>
        <input type="text" class="form-control" name="inputName" id="inputName">
      </div>
      
      <div class="form-group row">
        <label for="inputEmail">E-mail para contato</label>
        <input type="email" name="inputEmail" id="inputEmail" class="form-control">
      </div>

      <div class="form-group row">
        <label for="inputMessage">Mensagem</label>
        <textarea class="form-control" name="inputMessage" id="inputMessage" rows="3"></textarea>
      </div>

      <div class="form-group row">
        <div class="">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </div>

    </form>
  </div>
@endsection