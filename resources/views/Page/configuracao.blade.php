@extends('Template.index')

@section('title','Configuração')

@section('style',"background-color: #A3D5D3 !important")

@section('header')
<div class="col-xl-6">
          <img class="img-fluid mb-5 d-block mx-auto" src="{{asset('img/Fofo.png')}}" alt="">
          <p>Selecionar uma imagem</p>
          <input type="text" name="" id="" placeholder="Hexadecimal de cor">
        </div>
        <div style="margin-top: 0% !important;" class="col-xl-6">
          <input type="text" name="" id="" placeholder="Frase">
</div>
@endsection

@section('content')

<!-- Portfolio Grid Section -->
<section class="portfolio Message" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="row col-xl-12" style="display:flex;justify-content:center">
        <div class=" col-xl-5" style="margin: 1% 2%">
        <form action="post">
            <h2 style="text-align: center;margin: 5%">Alterar Registro</h2>
              <div class="row DisplayFlex">
                <label for="" class="BackColor-Roxo" style="width: 30%">Apelido</label><input class="BackColor-Roxo"
                  type="text" name="" id="" style="width: 60%" value="Apelido Atual">
              </div>
              <div class="row DisplayFlex">
                <label for="" class="BackColor-Roxo" style="width: 30%">Email</label><input class="BackColor-Roxo" type="email"
                  name="" id="" style="width: 60%">
              </div>
              <div class="row DisplayFlex">
                <label for="" class="BackColor-Roxo" style="width: 30%">Data de Nascimento</label><input class="BackColor-Roxo"
                  type="date" name="" id="" style="width: 60%">
              </div>
              <div class="row DisplayFlex">
                <label for="" class="BackColor-Roxo" style="width: 30%">Nova Senha</label><input class="BackColor-Roxo" type="password"
                  name="" id="" style="width: 60%">
              </div>
              <div class="row DisplayFlex">
                <input type="submit" value="Salvar Alterações" class="BackColor-Red">
              </div>
          </div>
          </form>
      </div>
    </div>
  </div>
  </div>
</section>
@endsection
