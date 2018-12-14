@php 

use App\Http\Controllers\BaseController;

$logged = Cookie::get('login');

@endphp

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav" style="width:100%  !important">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{URL::route('/')}}"><img src="{{asset('img/Icon/LogoIcon.png')}}" style="margin:1% 2%" alt="" srcset="" height="70px">Biblioteca Fantasma</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button"
        data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{URL::route('/Acervo')}}">Acervo</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{URL::route('Curso.All')}}">Aulas</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{URL::route('/Sobre')}}">Sobre</a>
          </li>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{URL::route('/Entrar')}}">Entrar</a>
          <li class="nav-item mx-0 mx-lg-1">
            @if($logged != null)
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{URL::route('/Perfil')}}"><img src="{{asset('img/Icon/PerfilIcon.png')}}" width="25px" alt="">Perfil</a>
                <a class="dropdown-item" href="{{URL::route('/Forum')}}"><img src="{{asset('img/Icon/ForumIcon.png')}}" width="25px" alt="">Fórum</a>
                <a class="dropdown-item" href="{{URL::route('/Configuracao')}}"><img src="{{asset('img/Icon/SettingIcon.png')}}" width="25px" alt="">Configuração</a>
                <a class="dropdown-item" href="{{URL::route('Login.SignOut')}}"><img src="{{asset('img/Icon/LogOutIcon.png')}}" height="40px" alt="">Sair</a>
              </div>
            </div> 
            @endif
          </li>
        </ul>
      </div>
    </div>
  </nav>