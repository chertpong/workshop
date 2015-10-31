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

</style>
<body ng-app="myApp">
<div id="body-wrapper">
    <nav class="nav navbar-fixed-top">
        <div id='cssmenu'>
            <ul id="menubar">
                <li class='active'><a id="button0" href="{{ url('/') }}">Home</a></li>
                <li><a id="button1" href="{{ url('/').'/#history' }}">History</a></li>
                <li ><a id="button2" href="{{ url('/contents') }}">Content</a></li>
                <li ><a id="button3" href="{{ url('/').'/#contact' }}">Contact</a></li>
                @if(Auth::check())
                    <ul class="nav navbar-nav">
                        <li><a href={{url('contents/create')}} class="hvr-underline-from-left">Create content</a></li>
                        <li><a href={{url('pictures')}} class="hvr-underline-from-left">Manage pictures</a></li>
                    </ul>
                @endif
                @if (Auth::guest())
                    <li id="button4" class="pull-right"><a  id=button4" href="{{ url('/auth/login') }}">Sign in</a></li>
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
    </nav>


@yield('content')


</div>
</body>
</html>