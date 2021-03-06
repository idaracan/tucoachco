@extends('layouts.app')
@section('title')
  <title>Búsqueda</title>
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

<nav class="navbar navbar-default">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <a class="navbar-brand" href="{{ url('/') }}">TuConferencista.co</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <form class="navbar-form navbar-left" method="get">
      <!--<select class="selectpicker form-control" >
        <option>Barranquilla</option>
        <option>Cartagena</option>
        <option>Santa Marta</option>
      </select>-->
    <div class="form-group">
      <input name="SEARCH" type="text" class="form-control" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div><!-- /.navbar-collapse -->
</nav>

<div class="container">
<div class="row">
    @if(isset($details))
    @foreach($details as $user)
    @if(($user -> id) > 1)
    <div class="col-xs-12 col-sm-6 col-md-6">
        <div class="well well-sm">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <img src="img/users/{{$user->id}}.jpeg" alt="" class="img-rounded img-responsive" />
                </div>
                <div class="col-sm-6 col-md-8">
                    <h4>
                        {{$user->name}} {{$user->lastname}}</h4>
                    <small><cite title="City">{{$user->city}} <i class="glyphicon glyphicon-map-marker">
                    </i></cite></small>
                    <p>
                        <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                        <br />
                        {{str_limit($user->description,$limit = 150, $end = '...')}}
                        <br />
                    <!-- Split button -->
                    <div class="btn-group">
                      <a href="/profile?profile={{$user->id}}"
                        class="btn btn-primary">
                          Perfil
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
    @endif
</div>
</div>
@endsection
