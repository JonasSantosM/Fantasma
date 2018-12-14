@extends('Template.index')

@section('title','Fórum')

@section('style','background-color: rgb(98, 170, 128) !important')

@php

use App\Http\Controllers\BaseController;

@endphp

@section('header')
<div class="col-xl-6">
          <img class="img-fluid mb-5 d-block mx-auto" src="{{asset('img/GhostForum.png')}}" alt="">
</div>
<div style="margin-top: 0% !important;" class="col-xl-6">
          <h2 class="text-uppercase mb-0">Hm~</h2>
          <h5 class="font-weight-light mb-0">Pergunte a um colega. O conhecimento vem de todos.</h5>
          <button class="Explorar" onclick="Question()">Fazer uma pergunta</button>
</div>
@endsection

@section('content')
<section style="display: none" id='Question'>
  <div class="container">
    <div class="row">

      <div class="col-xl-12" style="display:flex;justify-content:center">
      
        <div class="col-xl-6" class='GuiaContainer' style="padding: 1vw;border: none;border-radius: 3vw;background-color: #e2e2e2;">
        <div class="card col-xl-12" style="border-radius: 1vw; margin-top: 1%">
              <form action="{{URL::route('Base.CreateQuestion')}}" method="post">
                <div class="card-body">
                  <h2>Pergunta</h2>
                  <div  style="display:flex;">
                    <input type="text" name="titulo" id="titulo" class='BackColorRoxo' placeholder='Título' style='width:100%'>
                  </div>
                  <div  style="display:flex;">
                    <textarea name="descricao" id="descricao" class='BackColorRoxo' width="100% !important" rows='5' cols='80' placeholder></textarea>
                  </div>
                  <div  style="display:flex;justify-content:center;">
                    <button type='submit' class="BackColor-Red">Perguntar</button>
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class=" ">
  <div class="container">
    <div class="row">
      <div class="col-xl-12" style="display:flex;justify-content:center">
        <div class="col-xl-8 GuiaContainer" style="border-radius: 1vw">
        @if(!is_null(BaseController::GetQuestion()))

        @foreach(BaseController::GetQuestion() as $question)

        <div class="card col-xl-12" style="border-radius: 1vw; margin-top: 1%">
              <div class="card-body">
                <div>
                  <a class="card-title-link " href="{{URL::route('Pergunta.SetQuestion', $question->id)}}" style="text-align:center;margin: 1.5%">{{$question->titulo}}</a>
                </div>
                <p class="card-text">{{$question->descricao}}.</p>
                <p style='color:gray;'><img height="25px" src="{{asset('img/Lupa.png')}}" alt="" style='margin:1%;padding: 1%;border-radius:25px; background:#2c3e50'>Autor: {{BaseController::FindLogin($question->login_id)->apelido}}</p>
                @if($question->likes == 0)
                <form action="{{URL::route('Pergunta.Like', $question->id)}}" method="post">
                  <button class="Like" type='submit'><img height="20px" src="{{asset('img/Like.png')}}" alt=""></button>
                </form>
                @else
                <form action="{{URL::route('Pergunta.Like', $question->id)}}" method="post">
                  <button class="Like" style="background: lightcoral" type='submit'><img height="20px" src="{{asset('img/Like.png')}}" alt=""></button>@if($question->respondida != 0)
                <img height="20px" src="{{asset('img/Checked.png')}}" alt="">
                @endif
                </form>
                @endif
                
              </div>
            </div>

        @endforeach

        @endif
        </div>
      </div>
    </div>
  </div>
</section>


@endsection