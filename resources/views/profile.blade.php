@extends('layouts.app')

@section('title')
  <title>Perfil</title>
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
    <a class="navbar-brand" href="{{ url('/') }}">TuCoach</a>
  </div>
  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <form action="/search" class="navbar-form navbar-left" method="get">
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
@if(isset($details))
@foreach($details as $user)
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="img/users/{{$user->id}}.jpeg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{$user->name}} {{$user->lastname}}
					</div>
					<div class="profile-usertitle-job">
						Life Coach, Emprendimiento Digital, Branding.
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button id="botonmensaje" type="button" class="btn btn-danger btn-sm">Mensaje</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Agregar a favoritos </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
      <div class="profile-content">
        {{$user->description}}
      </div>
		</div>
	</div>
</div>

<div class="col-md-4">
        	<div id="messager" class="card hidden">
                    <div class="card-content">
                    	<div class="card-header-orange">
                           <h1 class="card-heading">Mandar Correo a {{$user->name}}</h1>
                       	</div>
                       	<div class="card-body">
                          {!! Form::open(['url' => 'foo/bar']) !!}
                              <div class="form-group">
                                {{Form::label('name', 'Nombre')}}
                                {{Form::text('name', '',['class' => 'form-control', 'placeholder' => 'Nombre'])}}
                              </div>
                              <div class="form-group">
                                {{Form::label('email', 'Correo Electrónico')}}
                                {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'Correo'])}}
                              </div>
                              <div class="form-group">
                                {{Form::label('message', 'Mensaje')}}
                                {{Form::textarea('message', '',['class' => 'form-control', 'placeholder' => 'Mensaje'])}}
                              </div>
                              <div>
                                {{form::submit('submit', ['class'=>'btn btn-primary'])}}
                              </div>
                          {!! Form::close() !!}
                 	      </div>
                     	<nav class="nav-tabs">

                     	</nav>
                    </div>
                </div>
        </div>
@endforeach
@endif

@endsection
