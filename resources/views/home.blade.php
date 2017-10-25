@extends('layouts.app')

@section('title')
<title>
  TuCoach Home
</title>
@endsection

@section('content')

<!-- =========================
   Call to action
============================== -->
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

<!-- =========================
   Header
============================== -->
<header id="header">
<div class="item">
  <!-- Set the second background image using inline CSS below. -->
  <div class="fill" style="background-image:url('img/slider/slider-1.jpg');"></div>

<div class="carousel-caption">
  <strong class="bold-text">TuCoach.co </strong>
  <h1 class="light margin-bottom-medium mat-none">
    Mejora tu <strong class="bold-text">Persona</strong>
  </h1>
  <p class="light margin-bottom-small">
    Encuentra tu coach o conferencista.
  </p>
  <form action="/search" method="get">
    <div class="row">
      <!--
      <div class="col-sm-3">
      <select class="selectpicker form-control" >
      <option>Barranquilla</option>
      <option>Cartagena</option>
      <option>Santa Marta</option>
      </select>
      </div>
      -->
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
</header> <!-- *** end Header *** -->

  <!-- =========================
     About Us
  ============================== -->
<section id="about-us" class="about-us">
    <div class="overlay">
        <div class="container padding-top-large">
            <h2>
                <strong class="bold-text">Acerca de </strong>
                <span class="light-text main-color">Nosotros</span>
            </h2>
            <div class="line main-bg"></div>
            <div class="row margin-bottom-medium">
                <div class="col-md-7">
                    <div class="jumbo-text light-text margin-top-medium wow slideInLeft" data-wow-duration="2s">
                        TuCoach.co <strong class="bold-text">Agencia de mejora personal</strong>
                        que te permite encontrar los mejores coachs y conferencistas disponibles
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="" alt="Imagen de TuCoach" class="center-block img-responsive">
                </div>
                <div class="clearfix"></div>
            </div>
            <p class="margin-bottom-medium wow slideInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="row margin-top-large">
                <div class="col-md-8">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <!-- =========================
                           Collapsible Panel 1
                        ============================== -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <div class="panel-title">
                                    <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">
                                        <span class="state"><strong>-</strong></span>
                                        <strong>Beneficios de Usar tuCoach.co</strong>
                                    </a>
                                </div>
                            </div> <!-- *** end panel-heading *** -->
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer far.
                                </div>
                            </div> <!-- *** end collapsed item *** -->
                        </div> <!-- *** end panel *** -->

                        <!-- =========================
                          Collapsible Panel 2
                        ============================== -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <div class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="state"><strong>+</strong></span>
                                        <strong>Nuestros coaches</strong>
                                    </a>
                                </div>
                            </div> <!-- *** end panel-heading *** -->
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer far.
                                </div>
                            </div> <!-- *** end collapsed item *** -->
                        </div> <!-- *** end panel *** -->

                        <!-- =========================
                          Collapsible Panel 3
                        ============================== -->
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <div class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span class="state"><strong>+</strong></span>
                                        <strong>Casos de éxito</strong>
                                    </a>
                                </div>
                            </div> <!-- *** end panel-heading *** -->
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer far.
                                </div>
                            </div> <!-- *** end collapsed item *** -->
                        </div> <!-- *** end panel *** -->
                    </div> <!-- *** end panel-group *** -->
                </div> <!-- *** end col-md-8 *** -->
                <div class="col-md-4">
                    <img src="img/case-studdy-people.png" class="center-block img-responsive" alt="Case Study">
                </div>
            </div>
        </div>
    </div>
</section> <!-- *** end About Us *** -->
<!-- =========================
   Why Choose Us
============================== -->
<section id="why-choose-us" class="why-choose-us">
    <div class="container margin-top-large">
        <h2>
            Nuestros
            <span class="light-text main-color">Clientes</span>
        </h2>
        <div class="line main-bg margin-bottom-large"></div>

        <div class="row text-center">

            <!-- *****  Service Single ***** -->
            <div class="col-md-4">
                <div class="service wow slideInLeft">
                    <div class="icon"><i class="icon-idea"></i></div>
                    <h4>Cliente <strong>Uno</strong></h4>
                    <p>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec</p>
                </div>
            </div>
            <!-- *****  Service Single ***** -->
            <div class="col-md-4">
                <div class="service wow fadeInUp">
                    <div class="icon"><i class="icon-heart"></i></div>
                    <h4>Cliente <strong>Dos</strong></h4>
                    <p>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service wow slideInRight">
                    <div class="icon"><i class="icon-office"></i></div>
                    <h4><strong>Cliente</strong> Tres</h4>
                    <p>Suspendisse velit ticol sodales, viverra sigirton vitae, accumsan orci mauris nec</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========================
   Testimonial
============================== -->
<section id="testimonial" class="testimonial padding-large white-color text-center">
    <div class="container">
        <div class="row">
            <h2 class="margin-bottom-medium">What Our <strong class="bold-text">Customer</strong> Said</h2>
            <div class="col-md-10 col-md-offset-1">
                <!-- *****  Carousel start ***** -->
                <div id="testimonial-carousel" class="owl-carousel owl-theme testimonial-carousel">
                    <!-- =========================
                       Single Testimonial item
                    ============================== -->
                    <div class="item margin-bottom-small"> <!-- ITEM START -->
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit..</p>
                        <div class="client margin-top-medium clearfix">
                            <img src="img/testimonial/testimonial-1.jpg" height="50" width="50" alt="Client Image">
                            <ul class="client-info main-color">
                                <li><strong>John Doe</strong></li>
                                <li>Co-Founder, Envato</li>
                            </ul>
                        </div>
                    </div> <!-- ITEM END -->

                    <!-- =========================
                       Single Testimonial item
                    ============================== -->
                    <div class="item"> <!-- ITEM START -->
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit..</p>
                        <div class="client margin-top-medium">
                            <img src="img/testimonial/testimonial-2.jpg" alt="Client Image" class="grayscale">
                            <ul class="client-info main-color">
                                <li>John Doe</li>
                                <li>Co-Founder, Envato</li>
                            </ul>
                        </div>
                    </div> <!-- ITEM END -->

                    <div class="item"> <!-- ITEM START -->
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit..</p>
                        <div class="client margin-top-medium">
                            <img src="img/testimonial/testimonial-1.jpg" alt="Client Image" class="grayscale">
                            <ul class="client-info main-color">
                                <li>John Doe</li>
                                <li>Co-Founder, Envato</li>
                            </ul>
                        </div>
                    </div> <!-- ITEM END -->

                    <!-- =========================
                       Single Testimonial item
                    ============================== -->
                    <div class="item"> <!-- ITEM START -->
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit..</p>
                        <div class="client margin-top-medium">
                            <img src="img/testimonial/testimonial-2.jpg" alt="Client Image" class="grayscale">
                            <ul class="client-info main-color">
                                <li>John Doe</li>
                                <li>Co-Founder, Envato</li>
                            </ul>
                        </div>
                    </div> <!-- ITEM END -->

                    <!-- =========================
                       Single Testimonial item
                    ============================== -->
                    <div class="item"> <!-- ITEM START -->
                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit..</p>
                        <div class="client margin-top-medium">
                            <img src="img/testimonial/testimonial-1.jpg" alt="Client Image" class="grayscale">
                            <ul class="client-info main-color">
                                <li>John Doe</li>
                                <li>Co-Founder, Envato</li>
                            </ul>
                        </div>
                    </div> <!-- ITEM END -->
                </div>
            </div>
        </div>
    </div>
</section> <!-- *** end Testimonial *** -->

<!-- =========================
   Send Message
============================== -->
<section id="send-message" class="send-message main-bg white-color text-center">
    <div class="send-icon" data-toggle="modal" data-target="#contact-form">
        <i class="fa fa-paper-plane"></i>
    </div>
    <p class="light-text"><span class="bold-text">Contáctanos</span ></p>
    <!-- Contact Form Modal -->
    <div class="modal fade contact-form" id="contact-form" tabindex="-1" role="dialog" aria-labelledby="contact-form" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body">

                    <!-- *****  Contact form ***** -->
                    <form class="form">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="first-name" placeholder="First name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="last-name" placeholder="Last name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="email" placeholder="Email address">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="project-name" placeholder="Project name">
                            </div>
                            <div class="form-group col-md-12 mab-none">
                                <textarea rows="6" class="form-control" id="description" placeholder="Your project details and description ..."></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="button bold-text main-bg"><i class="fa fa-paper-plane"></i></div>
                            </div>
                        </div>
                    </form>
                </div> <!-- *** end modal-body *** -->
            </div> <!-- *** end modal-content *** -->
        </div> <!-- *** end modal-dialog *** -->
    </div> <!-- *** end Contact Form modal *** -->
</section> <!-- *** end Send Message *** -->
<!-- =========================
   Footer
============================== -->
<footer id="footer" class="footer">
    <div class="container padding-large text-center">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <figure class="margin-bottom-medium">
                    <img src="img/logo.jpng" class="footer-logo" alt="Logo">
                </figure>
                <p class="margin-bottom-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>

                <!-- =========================
                   Social icons
                ============================== -->
                <ul class="social margin-bottom-medium">
                    <li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li class="g-plus hvr-pulse"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li class="instagram hvr-pulse"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li class="behance hvr-pulse"><a href="#"><i class="fa fa-behance"></i></a></li>
                    <li class="dribbble hvr-pulse"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
                <p class="copyright">
                    &copy; TuCoach.co
                </p>
            </div>
        </div>
    </div>
</footer> <!-- *** end Footer *** -->
@endsection
