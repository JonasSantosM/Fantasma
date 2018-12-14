@extends('Template.index')

@section('title','Biblioteca Fantasma')

@section('header')
<div class="col-xl-6">
          <img class="img-fluid mb-5 d-block mx-auto" src="{{asset('img/ghost.jpg')}}" alt="">
        </div>
        <div style="margin-top: 20% !important;" class="col-xl-6">
          <h2 class="text-uppercase mb-0">Boo!</h2>
          <h5 class="font-weight-light mb-0">Não se assustou?! Então que tal..
            <span>C#!</span>
            Uma pessoa normal não se assustaria assim, mas
            você é um programador.</h5>
          <a href="{{URL::route('/Entrar')}}" class=""><button class="Explorar">Explorar</button></a>
        </div>
@endsection

@section('content')

<section class="portfolio Message" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-4 Texto">
          <h3>Bem-vindos a Biblioteca Fantasma de Jogos</h3>
          Este portal é totalmente voltado para pessoas que gostariam de aprender a programar e compartilhar seu progresso com os outros.
          Nossas aulas e o espaço de Acervo para a exposição dos trabalhos é um exemplo. Então, se for novo, explore este duas partes do nosso site, Aulas e Fórum. Aposto que irá gostar.
        </div>
        <div class="row col-xl-12" style="display:flex;justify-content:center">
          <div class="card col-xl-5" style="margin: 1% 2%">
            <img class="card-img-top" height="320px" style="margin-top:2%;" src="{{asset('img/Estante.jpg')}}"
              alt="Card image cap">
            <div class="card-body Button">
              <a href="{{URL::route('/Aulas')}}" class="btn Explorar">Tutoriais</a>
            </div>
          </div>
          <div class="card col-xl-5" style="display:flex;justify-content:center; margin: 1% 2%">
            <img class="card-img-top" style="margin-top:2%;" src="{{asset('img/Rate.jpg')}}"
              alt="Card image cap">
            <div class="card-body Button">
              <a href="{{URL::route('/Forum')}}" class="btn Explorar">Fórum</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection