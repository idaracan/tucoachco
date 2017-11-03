@extends('layouts.app')

@section('title')
<title>
  TuCoach Home
</title>
@endsection

@section('content')

@if(!Auth::check())
<section class="navbar navbar-default main-bg advice-bar">
  <div class="navbar-form">
    <a class="btn btn-default" href="{{ url('/register') }}">
      Regístrate a TuCoach.co
    </a>
    <a class="btn btn-default" href="{{ url('/login') }}">
      Inicia sesión
    </a>
  </div>
</section>
@endif

<header id="header">
<div class="item">
  <!-- Set the second background image using inline CSS below. -->
  <div class="fill" style="background-image:url('img/slider/Barranquilla.jpg');"></div>

<div class="carousel-caption">
  <h1 class="light margin-bottom-medium mat-none">
    <strong class="bold-text">TuConferencista.co</strong>
  </h1>
  <p class="light margin-bottom-small">
    Encuentra tu conferencista aquí.
  </p>
  <form action="/search" method="get">
    <div class="row">
      <div class="col-sm-12">
        <div class="input-group stylish-input-group">
          <input name="SEARCH" type="text" class="form-control"
          placeholder="Busca tu Coach, Conferencista o ámbito a mejorar" >
          <span class="input-group-addon"></span>
        </div>
      </div>
    </div>
    <div class="row spacesimple">
      <div class="wrapper col-md-12 col-sm-12 col-xs-12">
        <button class="button my-button" type="submit">
          Buscar
        </button>
      </div>
    </div>
  </form>
</div>
<div class="overlay"></div>
</div>
</header>

<footer id="footer" class="footer">
    <div class="container padding-large text-center">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ul class="social margin-bottom-medium">
                    <li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <p class="copyright">
                    &copy; TuCoach.co
                </p>
            </div>
        </div>
    </div>
</footer>
@endsection
