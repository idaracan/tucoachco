<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- SITE TITLE -->
    @yield('title')
    <!-- =========================
       Bootstrap and animation
    ============================== -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- =========================
       Fonts, typography and icons
    ============================== -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- =========================
       Carousel, lightbox and circle generator
    ============================== -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo-lightbox-default.css">
    <link rel="stylesheet" href="css/jquery.circliful.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- ***** Custom Stylesheet ***** -->
    <link rel="stylesheet" href="css/main.css">
    <!-- ***** Responsive fixes ***** -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Header scripts -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/queryloader2.min.js"></script>
    <style media="screen"></style>
    <!-- =========================
       Preloader
    ==============================
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            "use strict";
            new QueryLoader2(document.querySelector("body"), {
                barColor: "#e74c3c",
                backgroundColor: "#111",
                percentage: true,
                barHeight: 1,
                minimumTime: 200,
                fadeOutTime: 1000
            });
        });
    </script>
    -->
</head>
<body>

@yield('content')
<!-- =========================
 JavaScripts
============================== -->
<script src="js/vendor/jquery-1.11.1.js"></script>
<script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>
<script src="js/twitterFetcher_min.js"></script>
<script src="js/vendor/bootstrap.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.circliful.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
