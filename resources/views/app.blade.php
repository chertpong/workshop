<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Workshop</title>
@include('css')
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @include('script')
</head>
<style>
    @font-face {
        font-family: lucien;
        src: {!! url("bower_components/bootstrap/fonts/DRdeco.ttf") !!};
    }
</style>
<body ng-app="myApp">
<div id="body-wrapper">
<nav id="navigation" class="nav navbar-fixed-top navbar-default navbar-trans" role="navigation">
    <div id="headnav" class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#head-nav" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand hvr-underline-from-left" href="{{ url('/') }}" id="home"><strong>Home</strong></a>
        </div>
        <div class="navbar-collapse collapse" id="head-nav">
            <ul class="nav navbar-nav navbar-left" id="menu2">
                <li id="contentb" class="hvr-underline-from-left"><a href="{{ url('/contents') }}"><strong>Content</strong></a></li>
                <li id="contactb"><a class="hvr-underline-from-left" href="{{ url('/#history') }}"><strong>History</strong></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="signin">
					@if(Auth::check())
						<ul class="nav navbar-nav">
							<li><a href={{url('contents/create')}} class="hvr-underline-from-left">Create content</a></li>
                            <li><a href={{url('pictures')}} class="hvr-underline-from-left">Manage pictures</a></li>
						</ul>
					@endif
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}" class="bsignin hvr-underline-from-left" id="sign-in"><strong>Sign in</strong></a></li>
						{{--<li><a href={{url('auth/register')}}>Register</a></li>--}}
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle hvr-underline-from-left" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href={{url('auth/logout')}}>Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
        </div>
    </div>
</nav>

@yield('content')


</div>
</body>
</html>