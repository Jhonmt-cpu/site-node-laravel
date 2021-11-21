@extends('site.master.layout');

@section('content')

<div class="jumbotron mt-5">
    <div class="container text-center">
    <h1 class="display-4">Contato</h1>
    <hr class="my-4">
    <p class="lead">Caso queira que entremos em contato, deixe seu nome e email!</p>
    </div>
  </div>


    <div class="container py-5">
        <form action="{{ route('register_contact') }}" method="POST">
            @csrf
            {{ csrf_field() }}
            <div class="form-group mb-3">
              <label for="name_input">Nome</label>
              <input name="name" type="text" class="form-control" id="name_input">
            </div>
            <div class="form-group mb-3">
              <label for="email_input">Email</label>
              <input name="email" type="email" class="form-control" id="email_input" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
          @if ($success ?? false)
          <div class="alert alert-success" role="alert">
            Contato cadastrado com sucesso!
          </div>
          @endif
    </div>
@endsection
