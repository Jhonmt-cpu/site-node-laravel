@extends('site.master.layout');

@section("headers")
    <link rel="stylesheet" href="/sass/frameworks.css">
@endsection

@section('content')
<div class="container marketing">

    <h2 class="h2 display-3 text-center mb-5">Frameworks</h2>

    @foreach ($data as $framework)
    {{ $index = $loop->index }}
    @if ($index % 2 == 0)
    <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">{{$framework['name']}}</h2>
          <p class="lead">{{$framework['description']}}</p>
        </div>
        <div class="col-md-5">
          <img src="{{asset($framework['photo_url'])}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"/>
        </div>
      </div>

      <hr class="featurette-divider">
    @else
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">{{$framework['name']}}</h2>
          <p class="lead">{{$framework['description']}}</p>
        </div>
        <div class="col-md-5">
          <img src="{{asset($framework['photo_url'])}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"/>
        </div>
      </div>

      <hr class="featurette-divider">
    @endif
    @endforeach
  </div>
@endsection
