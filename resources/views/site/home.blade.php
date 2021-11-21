@extends('site.master.layout')

@section('headers')
<link rel="stylesheet" href="/sass/home.css">
@endsection

@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset("img/capaNode.png")}}" class="img-fluid"/>
        <div class="container">
          <div class="carousel-caption text-left">

          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <h2 class="h2 display-3 text-center mb-5">Alguns frameworks que usam Node.js</h2>

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="{{asset("img/logo-react-js.png")}}" class="bd-placeholder-img rounded-circle img-thumbnail" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140" />
        <h2>React.js</h2>
        <p>React faz com que a criação de UIs interativas seja uma tarefa fácil. Crie views simples para cada estado na sua aplicação, e o React irá atualizar e renderizar de forma eficiente apenas os componentes necessários na medida em que os dados mudam.</p>
      </div>
      <div class="col-lg-4">
        <img src="{{asset("img/nest-js-logo.jpeg")}}" class="bd-placeholder-img rounded-circle img-thumbnail" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></img>
        <h2>Nest.js</h2>
        <p>Nest é um framework para a construção de aplicativos Node.js do lado do servidor eficientes e escalonáveis. Ele usa JavaScript moderno, é construído com TypeScript (preserva a compatibilidade com JavaScript puro) e combina elementos de OOP (Programação Orientada a Objetos), FP (Programação Funcional) e FRP (Programação Reativa Funcional).</p>
      </div>
      <div class="col-lg-4">
        <img src="{{asset("img/vue-js-logo.jpg")}}" class="bd-placeholder-img rounded-circle img-thumbnail" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"></img>
        <h2>Vue.js</h2>
        <p>O Vue.js conta com uma arquitetura que pode ser adotada de forma incremental, e que foca na renderização declarativa e na composição de componentes. Funcionalidades avançadas necessárias para aplicações complexas (como encaminhamento, gestão de estados e automação de compilação) são oferecidas por meio de bibliotecas e pacotes de suporte mantidos oficialmente [8], sendo o Nuxt.js como uma das soluções mais populares.</p>
      </div>
    </div>


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <h2 class="h2 display-3 text-center mb-5">Vantagens do Node.js</h2>

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Produtividade</h2>
        <p class="lead">Como o JavaScript é a linguagem mais usada em desenvolvimento web, o Node.js já conta com uma gama de possibilidades, inclusive com a reutilização de códigos, em que as equipes podem aproveitar melhor os recursos disponíveis.</p>
      </div>
      <div class="col-md-5">
        <img src="{{asset("img/produtividade.png")}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Flexibilidade</h2>
        <p class="lead">O Node.js é uma plataforma muito versátil e que pode ser usada em inúmeros cenários. Seu gerenciador de pacotes (Node Package Manager) é classificado como o maior repositório de softwares disponível, sendo que o pacote mais famoso é um framework voltado a desenvolvimento web, chamado Express.js.</p>
      </div>
      <div class="col-md-5">
        <img src="{{asset("img/flexibilidade.jpeg")}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Leveza</h2>
        <p class="lead">Como já citamos, devido ao seu formato single thread, os recursos computacionais são consideravelmente menos exigidos ao usar a linguagem Node. A velocidade na disponibilização de um sistema para uso (deploy) e na replicação de máquinas pode crescer muito.</p>
      </div>
      <div class="col-md-5">
        <img src="{{asset("img/leveza.jpg")}}" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"/>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
@endsection
