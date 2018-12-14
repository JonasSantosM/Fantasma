@include("Components.CursoPart", array("Curso_ID" => $data))
@extends('Template.index')
@php

use App\Http\Controllers\AulasController;

@endphp

@section('title','Aulas')

@section('header')
        <div class="col-xl-6">
          <img class="img-fluid mb-5 d-block mx-auto" src="{{asset('img/Aulas/Aulas.png')}}" alt="">
        </div>
        <div style="margin-top: 0% !important;" class="col-xl-6">
          <h5 class="font-weight-light mb-0">Não é tão bom quanto assistir um filme, mas vale a pena.</h5>
          <button class="Explorar" action('Login@All')>Acompanhar</button>
        </div>
@endsection

@section('content')
<section class="Search">

<div class="container">

    <div class="row DisplayFlex">
    <h2>Destaque da semana</h2><br><br>
</div>
    <div class="row DisplayFlex">
        <div class="col-xl-6 BackColorRed" style="padding:1vw">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        {{$type = ""}}
        <div class="carousel-inner">
          @foreach($data as $curso)
        @if(!is_null(AulasController::StaticFindByCourse($curso->id)))
          @foreach(AulasController::StaticFindByCourse($curso->id) as $aula)
          <div class="carousel-item".$type>
            <div class="Custom-Card-Video col-xl-3 col-sm-12">
          <video height="150px" controls>
                  <source  src="{{asset($aula->video)}}" type="video/mp4">
              </video>
              </div>
            <div class="carousel-caption d-none d-md-block">
              <h5>3</h5>
              <p>#3</p>
            </div>
          </div>
          @endforeach
        @endif
@endforeach
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

    </div>

  </div>

</div>

</section>


@foreach($data as $curso)
<section class="port">
    
<div class="container">
    <div class="row">
<div class="col-xl-12">
            <div class="row BackColorGreen" style="padding: 1vw;">
                <div class="col-xl-11">
                        {{$curso->nome}}
                    <div class="icon" style="right: 0; display:flex; justify-content:center;vertical-align: middle">
                        <div class="dropdown">
                            <div class="btn-group dropleft" role="group">
                                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:transparent;display:flex;justify-cotent:center">
                                <span class="sr-only">Toggle</span>
                                </button>
                            <div class="dropdown-menu">
                        <p style="padding:1vw;text-align:justify;word-break:break-all;font-size:1.1rem;color:#2c3e50!important">{{$curso->descricao}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="col-xl-12" style="display: flex;justify-content: center;">
          <div class="row col-xl-12 Custom-Card-Body">
        @if(!is_null(AulasController::StaticFindByCourse($curso->id)))
          @foreach(AulasController::StaticFindByCourse($curso->id) as $aula)
            <div class="Custom-Card-Video col-xl-3 col-sm-12">
          <video height="150px" controls>
                  <source  src="{{asset($aula->video)}}" type="video/mp4">
              </video>
              </div>
          @endforeach
        @endif
          </div>
        </div>
  </div>
</div>
</section>
@endforeach

@endsection