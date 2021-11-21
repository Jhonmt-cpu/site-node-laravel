@extends('site.master.layout');

@section("headers")
 <link rel="stylesheet" href="/sass/logos.css">
@endsection

@section('content')
<section class="jumbotron text-center">
    <div class="container">
      <h1>Algumas logos do Node.js</h1>
      <p class="lead text-muted">Aqui estão algumas das muitas logos que o node.js possui</p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{asset("img/node-logo1.png")}}" class="bd-placeholder-img card-img-top" width="100%" height="225" />
            <div class="card-body">
              <p class="card-text">Logo tradicional</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="{{asset("img/node-logo2.png")}}" class="bd-placeholder-img card-img-top" width="70%" height="225" />
              <div class="card-body">
                <p class="card-text">Logo Hexagonal</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img src="{{asset("img/node-logo3.png")}}" class="bd-placeholder-img card-img-top" width="100%" height="225" />
              <div class="card-body">
                <p class="card-text">Logo Minimalista</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection
