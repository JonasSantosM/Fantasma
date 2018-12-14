@extends('Template.index')

@section('title','Sobre')

@section('style','background-color: #F68A53 !important')

@section('header')
<div class="col-xl-6">
          <img class="img-fluid mb-5 d-block mx-auto" src="{{asset('img/Ghost.png')}}" alt="">
        </div>
        <div style="margin-top: 0% !important;" class="col-xl-6">
          <h2 class="text-uppercase mb-0">Fuu~</h2>
          <h5 class="font-weight-light mb-0">A nossa misão é fazer você aprender.</h5>
          <button class="Explorar">Conhecer</button>
        </div>
@endsection

@section('content')

  <!-- Portfolio Grid Section -->
  <section class="row" id="" style="padding: 0;margin: 0">
    <div class="col-xl-12" style="background-color: rgb(241, 148, 101);">
      <h2>Missão</h2><br>
      <p>A Biblioteca Fantasma tem como missão ensinar pessoas de diversas idades a programar e para isso
        contamos com uma plataforma criativa e com videos de diversos conteúdos interativos, além
        de proporcionar um abiente de debate entre alunos. </p>
    </div>
    <div class="col-xl-12" style="background-color: rgb(240, 155, 113);">
      <h2>Visão</h2><br>
      <p>Nossa visão tende a construir pessoas que sejam criativas e que saibam usar a programação como
        um meio de diversão.. </p>
    </div>
    <div class="col-xl-12" style="background-color: rgb(238, 167, 131);">
      <h2>Valores</h2><br>
      <p>Os alunos é a nossa razão de ser. Valoriza mos o conhecimento de cada um e tentamos da melhor maneira
        possivel transmitir nossos cohecimentos para que eles possam usufruir o maximo possivel e compartilhar
        com todos os usuários o que aprendeu.</p>
    </div>
  </section>

  <section class="portfolio" id="portfolio" style="background-color: rgb(240, 178, 147);">
      <div class="container">
        <div class="row">
          <div class="row col-xl-12" style="display:flex;justify-content:center">
            <div class=" col-xl-5" style="margin: 1% 2%">
              <form action="post">
                <legend>Contato</legend>
                <div class="row DisplayFlex">
                  <label for="" class="BackColor-Roxo">Email</label><input class="BackColor-Roxo" type="email" name="" id="">
                </div>
                <div class="row DisplayFlex">
                  <label for="" class="BackColor-Roxo">Mensagem</label><input class="BackColor-Roxo" type="textarea" name="" id="">
                </div>
                <div class="row DisplayFlex">
                  <input type="submit" value="Enviar" class="BackColor-Red">
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection