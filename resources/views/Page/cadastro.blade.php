@extends('Template.index')

@section('title','Cadastre-se')

@section('style',"background-color: #A3D5D3 !important")

@section('header')
<div class="col-xl-6">
          <img class="img-fluid mb-5 d-block mx-auto" src="{{asset('img/Fofo.png')}}" alt="">
        </div>
        <div style="margin-top: 0% !important;" class="col-xl-6">
          <h2 class="text-uppercase mb-0">Uh~</h2>
          <h5 class="font-weight-light mb-0">Com uma conta você poderá acompanhar o seu progresso.</h5>
          <button class="Explorar">Conhecer</button>
        </div>
@endsection

@section('content')

<!-- Portfolio Grid Section -->
<section class="portfolio Message" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="row col-xl-12" style="display:flex;justify-content:center">
        <div class=" col-xl-5" style="margin: 1% 2%">
          <form method="get" action="{{url('/Api/Login/SignIn')}}">
            <h2 style="text-align: center;margin: 5%">Iniciar Seção</h2>
            <div class="row DisplayFlex">
              <label for="" class="BackColor-Roxo" style="width: 30%">Email</label><input class="BackColor-Roxo" type="email"
                name="email" id="" style="width: 60%">
            </div>
            <div class="row DisplayFlex">
              <label for="" class="BackColor-Roxo" style="width: 30%">Senha</label><input class="BackColor-Roxo" type="password"
                name="senha" id="" style="width: 60%">
            </div>
            <div class="row DisplayFlex">
              <input type="submit" name="Logon" value="Entrar" class="BackColor-Red">
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>

 <!-- Portfolio Grid Section -->
 <section class="portfolio Message" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="row col-xl-12" style="display:flex;justify-content:center">
          <div class=" col-xl-5" style="margin: 1% 2%">
            <form method="post" action="{{route('Login.create')}}">
            <h2 style="text-align: center;margin: 5%">Cadastre-se</h2>
              <div class="row DisplayFlex">
                <label for="" class="BackColor-Roxo" style="width: 30%">Apelido</label><input class="BackColor-Roxo"
                  type="" name="apelido" id="" style="width: 60%">
              </div>
              <div class="row DisplayFlex">
                <label for="" class="BackColor-Roxo" style="width: 30%">Email</label><input class="BackColor-Roxo" type="email"
                  name="email" id="" style="width: 60%">
              </div>
              <div class="row DisplayFlex">
                <label for="" class="BackColor-Roxo" style="width: 30%">Data de Nascimento</label><input class="BackColor-Roxo"
                  type="date" name="dataNascimento" id="" style="width: 60%">
              </div>
              <div class="row DisplayFlex">
                <label for="" class="BackColor-Roxo" style="width: 30%">Senha</label><input class="BackColor-Roxo" type="password"
                  name="senha" id="" style="width: 60%">
              </div>
              <div class="row DisplayFlex">
                <label for="" class="BackColor-Roxo" style="width: 30%">Confirmar Senha</label><input class="BackColor-Roxo"
                  type="password" name="confirmar" id="" style="width: 60%">
              </div>
              <div class="row DisplayFlex">
                <a href="BackColor-Roxo" class="BackColor-Roxo" style="text-align: center">Políticas de Privacidade</a>
                <input type="submit" value="Cadastrar" class="BackColor-Red">
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
@endsection