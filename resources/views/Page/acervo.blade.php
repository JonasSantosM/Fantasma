@extends('Template.index')

@section('title','Acervo')

@php

use App\Http\Controllers\BaseController;

@endphp

@section('header')

 <div class="col-xl-6">
          <img class="img-fluid mb-5 d-block mx-auto" src="{{asset('img/AcervoC.png')}}" alt="">
        </div>
        <div style="margin-top: 0% !important;" class="col-xl-6">
          <h2 class="text-uppercase mb-0">Jogos em destaque~</h2>
          <h5 class="font-weight-light mb-0">Descubra o potencial dos nossos colaboradores.</h5>
          <button class="Explorar">Descobrir</button>
        </div>  

@endsection

@section('content')

<div class="container">

<div class="col-lg-12">

  <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img class="rounded mx-auto d-block" src="{{asset('img/Fofo.png')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="rounded mx-auto d-block" src="{{asset('img/Fofo.png')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="rounded mx-auto d-block" src="{{asset('img/Fofo.png')}}" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Voltar</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Avançar</span>
    </a>
  </div>

  <div class="row">

    @if(!is_null(BaseController::GetQuestion()))

    
    @foreach(BaseController::Acervo() as $acervo)

    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href=""><img class="card-img-top" src="{{asset('img/Ghost.png')}}" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="{{asset('Games/'.$acervo->nome.$acervo->extensao)}}" download target="_blank">{{$acervo->nome}}</a>
          </h4>
          <h6 class="card-text" style="color:#000000">{{$acervo->comentario}}</h6>
          <p class="card-text" style="color:#000000">{{$acervo->created_at}}</p>
        </div>
      </div>
    </div>
    
    @endforeach

    @endif

  </div>
  <!-- /.row -->

</div>

</div>

@endsection