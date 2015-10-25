<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workshop</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href={!! url("../bower_components/animate.css/animate.min.css") !!}>
    <link rel="stylesheet" href={!! url("../bower_components/Buttons/css/buttons.css") !!}>
    <link rel="stylesheet" href={!! url("../bower_components/Hover-master/css/hover.css") !!}>
    <link rel="stylesheet" href={!! url("../bower_components/angular-carousel/dist/angular-carousel.css") !!}>
    <link rel="stylesheet" href={!! url("../resources/assets/css/datz.css") !!}>
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    @font-face {
        font-family: lucien;
        src: {!! url("bower_components/bootstrap/fonts/DRdeco.ttf") !!};
    }
    html,body{
        background:center no-repeat fixed url(https://c2.staticflickr.com/6/5663/22347750402_707fd26aa7_h.jpg);
        background-size: cover;
        height: 100%;
        color:white;

    }
</style>
<body>
<nav class="nav navbar-trans navbar-fixed-top">
    <div id="headnav" class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hvr-underline-from-left" href="{{ url('/') }}" id="home"><strong>Home</strong></a>
        </div>
        <div class="navbar-collapse collapse" id="head-nav">
            <ul class="nav navbar-nav navbar-left" id="menu2">
                <li id="contentb"><a class=" hvr-underline-from-left"  href="{{ url('/contents') }}"><strong>Content</strong></a></li>
                <li id="contactb"><a class="hvr-underline-from-left" href="{{ url('/#contact') }}"><strong>Contact</strong></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="signin">
                <li><a href="#" class="bsignin hvr-underline-from-left" id="sign-in"><strong>Sign in</strong></a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')
        <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="../bower_components/angular/angular.js"></script>
<script src="../bower_components/angular-route/angular-route.js"></script>
<script src="../resources/assets/js/app.js"></script>
<script src="../bower_components/jquery/dist/jquery.js"></script>
<script src="../bower_components/Buttons/js/buttons.js"></script>
<script src="../bower_components/jquery.lettering.js"></script>
<script src="../bower_components/jquery.textillate.js"></script>
<script src="../bower_components/bootstrap/js/dropdown.js"></script>
<script src="../bower_components/angular-touch/angular-touch.js"></script>
<script src="../bower_components/angular-carousel/dist/angular-carousel.js"></script>


</body>
</html>