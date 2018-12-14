@extends('Template.index')


@php

use App\Http\Controllers\BaseController;

@endphp
@section('title','')

@section('content')
<section class=" ">
  <div class="container">
    <div class="row">
      <div class="col-xl-12" style="display:flex;justify-content:center">
        <div class="col-xl-8 GuiaContainer" style="border-radius: 1vw">
        @if(!is_null($Pergunta))

        <div class="card col-xl-12" style="border-radius: 1vw; margin-top: 1%">
              <div class="card-body">
                <div>
                  <a class="card-title-link " href="" style="text-align:center;margin: 1.5%">{{$Pergunta->titulo}}</a>
                </div>
                <p class="card-text">{{$Pergunta->descricao}}.</p>
                @if($Pergunta->likes == 0)
                <form action="{{URL::route('Pergunta.Like', $Pergunta->id)}}" method="post">
                  <button class="Like" type='submit'><img height="20px" src="{{asset('img/Like.png')}}" alt=""></button>
                </form>
                @else
                <form action="{{URL::route('Pergunta.Like', $Pergunta->id)}}" method="post">
                  <button class="Like" style="background: lightcoral" type='submit'><img height="20px" src="{{asset('img/Like.png')}}" alt=""></button>
                </form>
                @endif
                @if($Pergunta->respondida != 0)
                <img height="20px" src="{{asset('img/Checked.png')}}" alt="">
                @endif
              </div>
            </div>

                @foreach($Resposta as $resposta)

                <div class="card-body" style='background: #fff;word-wrap: break-word;border-radius: 1vw;margin-top: 1%;'>
                  <p class="card-text">{{$resposta->resposta}}.</p>
                </div>

              @endforeach

              <form action="{{URL::route('Base.SetResposta',$Pergunta->id)}}" method="post">
                <div class="card-body">
                  <h2>Resposta</h2>
                  <div  style="display:flex;">
                    <textarea name="resposta" id="descricao" class='BackColorRoxo' width="100% !important" rows='5' cols='80' placeholder></textarea>
                  </div>
                  <div  style="display:flex;justify-content:center;">
                    <button type='submit' class="BackColor-Red">Resposta</button>
                  </div>
                </div>
              </form>

        @endif
        </div>
      </div>
    </div>
  </div>
</section>

@endsection