@extends('layouts.app')
@section('title')
  <title>Búsqueda</title>
@endsection
@section('content')

<!-- =========================
   Call to action
============================== -->
@if(!Auth::check())
<section class="navbar navbar-default main-bg advice-bar">
  <div class="navbar-form">
      <a class="navbar-brand" href="{{ url('/register') }}">
        Regístrate a TuCoach.co
      </a>
    <button class="btn btn-default">
      <a href="{{ url('/login') }}" data-rel="#portfolio">Inicia sesión</a>
    </button>
  </div>
</section>
@endif

<nav class="navbar navbar-default">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-brand" href="#">TuCoach</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <form class="navbar-form navbar-left">
      <select class="selectpicker form-control" >
        <option>Barranquilla</option>
        <option>Cartagena</option>
        <option>Santa Marta</option>
      </select>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div><!-- /.navbar-collapse -->
</nav>

<div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6">
          <div class="well well-sm">
              <div class="row">
                  <div class="col-sm-6 col-md-4">
                      <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                  </div>
                  <div class="col-sm-6 col-md-8">
                      <h4>
                          Ivan Ramirez</h4>
                      <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                      </i></cite></small>
                      <p>
                          email@example.com
                          <br />
                          <a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                          <br />
                          June 02, 1988</p>
                      <!-- Split button -->
                      <div class="btn-group">
                          <button type="button" class="btn btn-primary">
                              Perfil
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
