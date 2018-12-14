@extends('Template.index')

@section('title','Usuário')

@php

use App\Http\Controllers\BaseController;

@endphp

@section('style','background-color: #F68A53 !important')

@section('header')

<div class="col-xl-6">
  <img class="img-fluid mb-5 d-block mx-auto" src="{{asset('img/Ghost.png')}}" alt="">
</div>
<div style="margin-top: 0% !important;" class="col-xl-6">
  <h5 class="font-weight-light mb-0">Uma frase.</h5>
</div>

<div class="col-xl-12" style="margin:1%;display:flex;align-content:center;justify-content:center">
<form action="{{URL::route('Login.Post')}}" method="post" class="col-xs-12" style="width:100%">
<div class="col-xl-12" style="margin:1%;display:flex;align-content:center;justify-content:center">
    <textarea name="post" class="BackColor-Roxo col-xs-12" id="" cols="30" rows="5" placeholder="Escreva alguma coisa"></textarea>
</div>
  <div class="col-xl-12" style="margin:1%;display:flex;align-content:center;justify-content:center">
    <input type="submit" value="Enviar" style="margin:2.5% 10%;" class="BackColor-Red col-xl-3">
  </div>
</form>
  </div>

@endsection

@section('content')

<div class="container">
@if(!is_null(BaseController::GetPosts()))


      @foreach(BaseController::GetPosts() as $posts)
      <div class="row" style="display: flex; justify-content: center">

  <div class="card col-xl-8" style="margin: 3%">

<div class="card-body">

  <p class="card-text">
{{$posts->post}}
  </p>
  <div>
  <form action="{{URL::route('Postagem.Delete',$posts->id)}}" method="post" style="display:inline">
  <p>{{$posts->created_at}}</p>
    <button type="submit" style="float:right" class="BackColor-Red col-xl-2">Deletar</button>
  </form>
  </div>
</div>

</div>

      </div>

      @endforeach

@endif
</div>

@endsection
